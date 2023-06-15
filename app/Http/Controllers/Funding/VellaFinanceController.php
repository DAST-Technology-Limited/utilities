<?php

namespace App\Http\Controllers\Funding;

use App\Enums\Status;
use App\Http\Controllers\Controller;
use App\Models\Funds\VellaFinance;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VellaFinanceController extends Controller
{
    public function confirmPayment()
    {
        $user = User::find(Auth::user()->id);
        $vella = $user->vellafinance()->latest()->first();
        return view("funding.vella-confirm")->with("vella", $vella);
    }

    public function vellaWebHook(Request $request)
    {
        file_put_contents("webhook.json", $request->type);
       $request = json_decode(json_encode($request->all()));
        if ($request->type == "transaction.completed" && $request->data->status == "successful") {
            $meta_data = json_decode($request->data->meta_data);
            $trans = VellaFinance::where("reference", $meta_data->reference)->where("status", Status::PENDING())->where("amount", $request->data->total)->first();

            if ($trans) {
                $trans->status = Status::APPROVED();
                $trans->response2 = json_encode($request);
                $trans->save();
                $wallet = $trans->user->wallet();
                $wallet->credit($trans->currency->symbol, $trans->amount, "Funding", json_encode($request));

            }
        }
    }
}
