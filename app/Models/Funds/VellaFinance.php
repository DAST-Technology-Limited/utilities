<?php

namespace App\Models\Funds;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use \GuzzleHttp\Client;

class VellaFinance extends Model
{
    use HasFactory;
    public $photo_url;
    public $title;
    public $description;
    public $redirect_url;
    public $payment_type;
    private $client;
    private $key;
    public function __construct()
    {
        $this->photo_url = asset("/images/logo.png");
        $this->title = "DAST Technology";
        $this->description = "Account funding";
        $this->redirect_url = URL("/funding/confirm");
        $this->payment_type = "SINGLE";
        $this->client = new Client();
        $this->key = env("MODE") == 'local' ? env("SANDBOX_VELLA_KEY") : env("LIVE_VELLA_KEY");
    }

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    /**
     * getPaymentLink - used to generate a payment link from vela finance
     * return: payment link
     */

    public function getPaymentLink()
    {
        $currency = $this->currency()->first();

        $response = $this->client->request('POST', 'https://sandbox.vella.finance/api/v1/payment-links/create',
        [
            'body' => '{
                "currency":"' . strtoupper($currency->symbol) . '",
                "payment_type":"' . $this->payment_type . '",
                "amount": "' . $this->amount . '",
                "photo_url":"' . $this->photo_url . '",
                "title":"' . $this->title . '",
                "description":"' . $this->description . '",
                "redirect_url":"' . $this->redirect_url . '",
                "payment_type":"' . $this->payment_type . '",
                "reference":"' . $this->reference . '"
            }',

            'headers' => [
                'Authorization' => 'Bearer ' . $this->key,
                'accept' => 'application/json',
                'content-type' => 'application/json',
            ]
            ]);
        $this->response = $response->getBody();
        $this->save();
        return $response;
    }

    public function confirmPayment()
    {
        $res = $this->client->request("GET", "https://webhook.site/token/b0c4c8b7-bc1e-45c2-9e60-941b8789ca63/requests");
        dd($res->getBody()->getContents());
        $url = 'https://sandbox.vella.finance/api/v1/checkout/transaction/' . $this->reference . '/verify';
        $response = $this->client->request('GET', $url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->key,
            ],
        ]);
        //  $this->response2 = $response->getBody();
        //  $this->save();
        return $response;
    }
}
