<?php

namespace App\Models\Utilities;

use App\Models\Utilities\Payloads\DataPayload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class Utility extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    private $glad_key;
    private $client;
    private $api_url;
    public $headers;
    public function __construct()
    {
        $this->glad_key = env("GLAD_API_KEY");
        $this->client = new Client();
        $this->api_url = "https://www.gladtidingsdata.com/api/";
        $this->headers = [
            'Authorization' => 'Token ' . $this->glad_key,
            'Content-Type' => 'application/json'
        ];
    }

    public function buyData()
    {
        $body = $this->payload;
        $request = new Request('POST', $this->api_url.'data/', $this->headers, $body);
        $res = $this->client->sendAsync($request)->wait();
        dd(json_encode($res->getBody()));
    }
}
