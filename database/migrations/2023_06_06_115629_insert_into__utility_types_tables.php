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
        DB::table("utility_types")->insert([
            ["name" => "data"],
            ["name" => "airtime"],
            ["name" => "electricity"],
            ["name" => "cable"],
            ["name" => "result_checker"]
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
