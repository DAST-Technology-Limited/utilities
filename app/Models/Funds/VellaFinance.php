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
    private $api_url;
    public function __construct()
    {
        $this->photo_url = asset("/images/logo.png");
        $this->title = "DAST Technology";
        $this->description = "Account funding";
        $this->redirect_url = URL("/funding/confirm");
        $this->payment_type = "SINGLE";
        $this->client = new Client();
        $this->key = env("MODE") == 'live' ? env("LIVE_VELLA_KEY") : env("SANDBOX_VELLA_KEY");
        $this->api_url = env("MODE") == 'live' ? env("VELLA_LIVE_API_URL") : env("VELLA_SANDBOX_API_URL");
    
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

        $response = $this->client->request(
            'POST',
            $this->api_url.'/api/v1/payment-links/create',
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
            ]
        );
        $this->response = $response->getBody();
        $data = json_decode($this->response);
        $this->payment_id = $data->data->id;
        $this->save();
        return $response;
    }

    public function confirmPayment()
    {
        $url = $this->api_url.'/api/v1/checkout/transaction/' . $this->reference . '/verify';
        $response = $this->client->request('GET', $url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->key,
            ],
        ]);
        $this->response2 = $response->getBody();
        $this->save();
        return $response;
    }
}
