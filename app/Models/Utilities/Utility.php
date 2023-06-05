<?php

namespace App\Models\Utilities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \GuzzleHttp\Client;

class Utility extends Model
{
    use HasFactory;
    private $glad_key;
    private $client;
    private $api_url;
    public function __construct()
    {
        $this->glad_key = env("32ffaf9c640ba1739049b17716e1b4ce9420de68");
        $this->client = new Client();
        $this->api_url = "https://www.gladtidingsdata.com/api/";
    }

    public function buyData()
    {

    }
}
