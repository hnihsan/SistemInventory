<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetilbarangmasuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detil_pengadaan', function(Blueprint $table){
          $table->integer('id_barang')->unsigned();
          $table->integer('id_pengadaan')->unsigned();
          $table->integer('jumlah')->nullable()->default(0);
          $table->string('keterangan')->nullable();
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
        //
    }
}
