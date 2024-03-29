<?php

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
        Schema::create('t_g_users', function (Blueprint $table) {
            $table->id();
            $table->string("user_id")->nullable();
            $table->string("tg_id");
            $table->string("tg_username");
            $table->timestamp('active_sub')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_g_users');
    }
};
