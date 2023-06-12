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
       
        // $table->string("utility_type_id");
        // $table->string("level_id");
        // $table->string("discount");

        DB::table("discounts")->insert([
            ["utility_type_id" => "1", "affiliate_level_id" => "5", "discount" => "25", "deleted_at" => now(), "created_at" => now(), "updated_at" => now()],
            ["utility_type_id" => "1", "affiliate_level_id" => "6", "discount" => "15", "deleted_at" => now(), "created_at" => now(), "updated_at" => now()],
            ["utility_type_id" => "1", "affiliate_level_id" => "7", "discount" => "4", "deleted_at" => now(), "created_at" => now(), "updated_at" => now()],
            ["utility_type_id" => "2", "affiliate_level_id" => "5", "discount" => "0", "deleted_at" => now(), "created_at" => now(), "updated_at" => now()],
            ["utility_type_id" => "2", "affiliate_level_id" => "6", "discount" => "0", "deleted_at" => now(), "created_at" => now(), "updated_at" => now()],
            ["utility_type_id" => "2", "affiliate_level_id" => "7", "discount" => "1", "deleted_at" => now(), "created_at" => now(), "updated_at" => now()],
            ["utility_type_id" => "3", "affiliate_level_id" => "5", "discount" => "0", "deleted_at" => now(), "created_at" => now(), "updated_at" => now()],
            ["utility_type_id" => "3", "affiliate_level_id" => "6", "discount" => "0", "deleted_at" => now(), "created_at" => now(), "updated_at" => now()],
            ["utility_type_id" => "3", "affiliate_level_id" => "7", "discount" => "0", "deleted_at" => now(), "created_at" => now(), "updated_at" => now()],
            ["utility_type_id" => "4", "affiliate_level_id" => "5", "discount" => "0", "deleted_at" => now(), "created_at" => now(), "updated_at" => now()],
            ["utility_type_id" => "4", "affiliate_level_id" => "6", "discount" => "0", "deleted_at" => now(), "created_at" => now(), "updated_at" => now()],
            ["utility_type_id" => "4", "affiliate_level_id" => "7", "discount" => "0", "deleted_at" => now(), "created_at" => now(), "updated_at" => now()],
            ["utility_type_id" => "5", "affiliate_level_id" => "5", "discount" => "25", "deleted_at" => now(), "created_at" => now(), "updated_at" => now()],
            ["utility_type_id" => "5", "affiliate_level_id" => "6", "discount" => "15", "deleted_at" => now(), "created_at" => now(), "updated_at" => now()],
            ["utility_type_id" => "5", "affiliate_level_id" => "7", "discount" => "4", "deleted_at" => now(), "created_at" => now(), "updated_at" => now()],
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
