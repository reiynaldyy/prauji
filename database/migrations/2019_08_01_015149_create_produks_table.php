<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pd');
            $table->integer('stokS');
            $table->integer('stokM');
            $table->integer('stokL');
            $table->text('deskripsi');
            $table->string('terjual');
            $table->string('gambar');
            $table->string('size');
            $table->integer('harga_jual');
            $table->unsignedBigInteger('id_kategori')->references('id')->on('nama_kategori')->onDelete('CASCADE');
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
        Schema::dropIfExists('produks');
    }
}
