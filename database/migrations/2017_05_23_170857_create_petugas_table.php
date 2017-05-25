<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('petugas', function (Blueprint $table){
        $table->increments('id');
        $table->string('username', 20)->unique();
        $table->string('nama');
        $table->string('password');
        $table->enum('level', ['0','1'])->default('0');
        $table->text('alamat');
        $table->rememberToken();
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
