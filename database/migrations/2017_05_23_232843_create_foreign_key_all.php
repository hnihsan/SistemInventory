<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyAll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengadaan', function(Blueprint $table){
          $table->foreign('unit')->references('id')->on('unit');
          $table->foreign('petugas')->references('username')->on('petugas');
        });

        Schema::table('detil_pengadaan', function(Blueprint $table){
          $table->foreign('id_barang')->references('id')->on('barang');
          $table->foreign('id_pengadaan')->references('id')->on('pengadaan');
        });

        Schema::table('pengeluaran', function(Blueprint $table){
          $table->foreign('tujuan')->references('id')->on('tempat');
          $table->foreign('petugas')->references('username')->on('petugas');
        });

        Schema::table('detil_pengeluaran', function(Blueprint $table){
          $table->foreign('id_barang')->references('id')->on('barang');
          $table->foreign('id_pengeluaran')->references('id')->on('pengeluaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
