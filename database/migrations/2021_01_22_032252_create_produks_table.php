<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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

            $table->unsignedBigInteger('idKategori');
            $table->foreign('idKategori')->references('id')->on('produk_kategoris')->onDelete('cascade');
            $table->unsignedBigInteger('idSupplier');
            $table->foreign('idSupplier')->references('id')->on('suppliers')->onDelete('cascade');

            $table->string('namaProduk');
            $table->string('descProduk');
            $table->string('imgProduk');
            $table->integer('stok');
            $table->integer('harga');
            $table->timestamps();

            
        });

        // Schema::table('produks', function (Blueprint $table) {
           
        // });
        // Schema::table('produks', function (Blueprint $table) {
        //    2021_01_22_032234_create_produks_table.php
        // });
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
