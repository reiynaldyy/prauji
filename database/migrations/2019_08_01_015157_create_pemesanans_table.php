<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_p');
            $table->date('tanggal');
            $table->integer('jam_p');
            $table->integer('total_harga');
            $table->string('penerima');
            $table->string('agen');


            $table->unsignedBigInteger('id_user')->references('id')->on('produk')->onDelete('CASCADE');
            $table->unsignedBigInteger('id_ongkir')->references('id')->on('pembayaran')->onDelete('CASCADE');
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
        Schema::dropIfExists('pemesanans');
    }
}
