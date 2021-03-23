<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->double('start_price');
            $table->double('yesterday_price');
            $table->double('current_price');
            $table->integer('per_day');
            $table->integer('per_all');
            $table->string('period');
            $table->double('goal');
            $table->double('amount');
            $table->double('exchange');
            $table->text('comment');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('base_currency_id')->unsigned()->nullable();
            $table->bigInteger('quote_currency_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('assets', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('base_currency_id')->references('id')->on('currencies');
            $table->foreign('quote_currency_id')->references('id')->on('currencies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
    }
}
