<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBengkelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bengkels', function (Blueprint $table) {
            $table->id();
            $table->string('nama',255);
            $table->string('alamat',255);
            $table->string('no_hp',50);
            $table->text('keterangan');
            $table->string('created_who',50);
            $table->string('update_who',50);
            $table->integer('id_pemilik');
            $table->integer('id_lokasi');
            $table->integer('id_penilaian');
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
        Schema::dropIfExists('bengkels');
    }
}
