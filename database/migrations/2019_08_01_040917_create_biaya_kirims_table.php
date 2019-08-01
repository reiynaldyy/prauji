<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiayaKirimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biaya_kirims', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_ongkir');
            $table->string('kota_kir');
            $table->unsignedBigInteger('biaya');
            $table->unsignedBigInteger('id_prov')->references('id')->on('provinsi')->onDelete('CASCADE');
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
        Schema::dropIfExists('biaya_kirims');
    }
}
