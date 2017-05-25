<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangmasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengadaan', function(Blueprint $table){
          $table->increments('id');
          $table->date('tanggal');
          $table->integer('unit')->nullable()->unsigned();
          $table->string('vendor')->nullable();
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
