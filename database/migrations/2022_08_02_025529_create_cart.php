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
        Schema::create('cart', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('nama');
            $table->integer('id_produk')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->integer('ukuran')->unsigned();
            $table->integer('jumlah')->unsigned();
            $table->integer('berat')->unsigned();
            $table->integer('total')->unsigned();
            $table->timestamps();

            
            $table->foreign('id_produk')->references('id')->on('produk')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart');
    }
};
