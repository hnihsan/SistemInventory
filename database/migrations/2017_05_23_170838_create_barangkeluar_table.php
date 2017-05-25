<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangkeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('pengeluaran', function(Blueprint $table){
        $table->increments('id');
        $table->date('tanggal');
        $table->integer('tujuan')->nullable()->unsigned();
        $table->string('petugas', 20)->unique();
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
