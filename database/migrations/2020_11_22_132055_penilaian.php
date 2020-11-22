<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Penilaian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('penilaian', function (Blueprint $table) {
            $table->id('id_penilaian');
            $table->string('keterangan');
            $table->integer('nilai');
            $table->date('created_when');
            $table->date('update_when');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('penilaian');
    }
}
