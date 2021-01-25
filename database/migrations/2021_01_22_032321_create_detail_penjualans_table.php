<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_penjualans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idPenjualan');
            $table->unsignedBigInteger('idProduk');
            $table->dateTime('tglPenjualan');
            $table->string('firstProdukNama');
            $table->string('firstProdukDesc');
            $table->string('firstProdukStok');
            $table->string('firstProdukHarga');
            $table->string('firstSupplierNama');
            $table->string('firstKategoriNama');
            $table->integer('jumlah');
            $table->integer('totalHarga');
            $table->timestamps();
        });

        Schema::table('detail_penjualans', function (Blueprint $table) {
            $table->foreign('idPenjualan')->references('id')->on('penjualans')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idProduk')->references('id')->on('produks')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_penjualans');
    }
}
