<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('shippingAddress');
            $table->string('phone');
            $table->string('orderDate');
            $table->string('waist');
            $table->string('inseam');
            $table->string('outseam');
            $table->string('rise');
            $table->string('hips');
            $table->string('thigh');
            $table->string('jeans');
            $table->string('style');
            $table->string('fabric');
            $table->string('fabricColor');
            $table->string('scrapping');
            $table->string('whiskers');
            $table->string('ripped');
            $table->string('text');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('orders');
    }
}
