<?php

use App\Models\Funds\Currency;
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
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string("symbol")->unique();
            $table->timestamps();
        });

        DB::table('currencies')->insert([
            ["symbol" => "ngn", "created_at" => now(), "updated_at" => now()],
            ["symbol" => "usd", "created_at" => now(), "updated_at" => now()],
            ["symbol" => "usdt", "created_at" => now(), "updated_at" => now()]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currencies');
    }
};
