<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetilbarangkeluar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('detil_pengeluaran', function(Blueprint $table){
        $table->integer('id_barang')->unsigned();
        $table->integer('id_pengeluaran')->unsigned();
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
