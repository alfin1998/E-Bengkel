<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bengkel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bengkel', function (Blueprint $table) {
            $table->id('id_bengkel');
            $table->string('nama_toko');
            $table->string('alamat_toko');
            $table->string('keterangan');
            $table->time('jam_buka');
            $table->string('nohp');
            $table->time('jam_tutup');
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
        //
    }
}
