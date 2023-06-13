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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('author');
            $table->string('title');
            $table->mediumText('body');
            $table->string('image')->nullable();
            $table->string('status')->default('pending');
            $table->unsignedInteger('likes')->default(0); // Add the likes column with a default value of 0
            $table->unsignedInteger('dislikes')->default(0); // Add the dislikes column with a default value of 0
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
        Schema::dropIfExists('blogs');
    }
};
