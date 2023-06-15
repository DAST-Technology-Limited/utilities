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
        // if (env("MODE") == "local") {
        //     $request = "{\"type\":\"transaction.completed\",\"version\":\"1.0\",\"created\":\"2023-05-29T13:50:37.885-04:00\",\"data\":{\"total\":\"500\",\"amount\":\"495\",\"status\":\"successful\",\"customer\":{\"name\":\"Clement Iyida\",\"email\":\"iyidaclem@gmail.com\"},\"trnx_ref\":\"VEP60rbr1685382254783\",\"meta_data\":\"{\\\"id\\\":\\\"plink_Jh72gY7pLUDx1UIzFRccJZMp\\\",\\\"reference\\\":\\\"8c1cc291-784c-4235-b95a-41a4087cd7a4\\\",\\\"email\\\":\\\"iyidaclem@gmail.com\\\",\\\"name\\\":\\\"Clement Iyida\\\",\\\"amount\\\":500,\\\"currency\\\":\\\"NGN\\\",\\\"transactionReference\\\":\\\"VEP60rbr1685382254783\\\",\\\"sourceMeta\\\":null}\",\"narration\":\"Received 495 from Vella Checkout\",\"reference\":\"VEP60rbr1685382254783\",\"created_at\":\"2023-05-29 05:50:37\",\"settlement_currency\":\"NGNT\"}}";
        //     $request = json_decode($request);
        // }
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
