<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStartAuctionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('start_Auction', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('seller_name');
            $table->string('category');
            $table->string('product_name');
            $table->float('starting_price');
            $table->dateTime('end_time');
            $table->string('description');
            $table->string('quantity');
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
        Schema::drop('start_Auction');
    }
}
