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
         //Data plans
         DB::table("data")->insert([
            // MTN_SME
            ["network_id" => "1", "size" => "500MB", "amount" => "108", "validity" => "30", "created_at" => now(), "updated_at" => now()],
            ["network_id" => "1", "size" => "1GB", "amount" => "217", "validity" => "30", "created_at" => now(), "updated_at" => now()],
            ["network_id" => "1", "size" => "2GB", "amount" => "434", "validity" => "30", "created_at" => now(), "updated_at" => now()],
            ["network_id" => "1", "size" => "3GB", "amount" => "651", "validity" => "30", "created_at" => now(), "updated_at" => now()],
            ["network_id" => "1", "size" => "5GB", "amount" => "1085", "validity" => "30", "created_at" => now(), "updated_at" => now()],
            ["network_id" => "1", "size" => "10GB", "amount" => "2170", "validity" => "30", "created_at" => now(), "updated_at" => now()],

            // GLO_SME
            ["network_id" => "2", "size" => "500MB", "amount" => "115", "validity" => "30", "created_at" => now(), "updated_at" => now()],
            ["network_id" => "2", "size" => "1GB", "amount" => "230", "validity" => "30", "created_at" => now(), "updated_at" => now()],
            ["network_id" => "2", "size" => "2GB", "amount" => "460", "validity" => "30", "created_at" => now(), "updated_at" => now()],
            ["network_id" => "2", "size" => "3GB", "amount" => "690", "validity" => "30", "created_at" => now(), "updated_at" => now()],
            ["network_id" => "2", "size" => "5GB", "amount" => "1150", "validity" => "30", "created_at" => now(), "updated_at" => now()],
            ["network_id" => "2", "size" => "10GB", "amount" => "2300", "validity" => "30", "created_at" => now(), "updated_at" => now()],

            // GLO_SME
            ["network_id" => "3", "size" => "500MB", "amount" => "113", "validity" => "30", "created_at" => now(), "updated_at" => now()],
            ["network_id" => "3", "size" => "1GB", "amount" => "227", "validity" => "30", "created_at" => now(), "updated_at" => now()],
            ["network_id" => "3", "size" => "2GB", "amount" => "454", "validity" => "30", "created_at" => now(), "updated_at" => now()],
            ["network_id" => "3", "size" => "5GB", "amount" => "1135", "validity" => "30", "created_at" => now(), "updated_at" => now()],
            ["network_id" => "3", "size" => "10GB", "amount" => "2270", "validity" => "30", "created_at" => now(), "updated_at" => now()],
            ["network_id" => "3", "size" => "15GB", "amount" => "3405", "validity" => "30", "created_at" => now(), "updated_at" => now()],
            ["network_id" => "3", "size" => "20GB", "amount" => "4540", "validity" => "30", "created_at" => now(), "updated_at" => now()]
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
