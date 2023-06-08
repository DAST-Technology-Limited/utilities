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
       
        // Create default user level
        DB::table("levels")->insert([
            ["name" => "user"],
            ["name" => "editor"],
            ["name" => "admin"],
            ["name" => "superadmin"]
        ]);  //create first user level
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
