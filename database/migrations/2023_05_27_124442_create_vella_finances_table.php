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
        Schema::create('vella_finances', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained("users");
            $table->foreignId("currency_id")->constrained("currencies");
            $table->string("amount");
            $table->text("response")->nullable();
            $table->text("response2")->nullable();
            $table->json("meta_data")->nullable();
            $table->string("reference");
            $table->string("status")->default(Status::PENDING());
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
        Schema::dropIfExists('vella_finances');
    }
};
