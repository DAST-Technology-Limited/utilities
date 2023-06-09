<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        
        // Inser default networks
        DB::table("networks")->insert([
            ["network_id" => "1", "network_name" => "MTN"],
            ["network_id" => "2", "network_name" => "GLO"],
            ["network_id" => "3", "network_name" => "AIRTEL"],
            ["network_id" => "6", "network_name" => "9MOBILE"],
            ["network_id" => "7", "network_name" => "SMILE"]
        ]);   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
