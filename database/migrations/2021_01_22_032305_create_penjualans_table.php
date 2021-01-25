<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idKaryawan');
            $table->dateTime('tglPenjualan');
            $table->integer('total_harga');
            $table->timestamps();
        });

        Schema::table('penjualans', function (Blueprint $table) {
            $table->foreign('idKaryawan')->references('id')->on('karyawans')
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
        Schema::dropIfExists('penjualans');
    }
}
