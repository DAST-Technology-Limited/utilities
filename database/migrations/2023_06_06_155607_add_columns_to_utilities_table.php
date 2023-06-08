<?php

use App\Enums\Status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::table('utilities', function (Blueprint $table) {
            $table->string("user_id");
            $table->string("price"); // price based on level
            $table->json("payload"); 
            $table->json("response")->nullable();
            $table->string("status")->default(Status::PENDING());
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utilities', function (Blueprint $table) {
            //
        });
    }
};
