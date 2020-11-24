<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pelanggan', function (Blueprint $table) {
            $table->foreign('id_pelanggan')->references('id')->on('users');
            
        });
        Schema::table('pemilik', function (Blueprint $table) {
            $table->foreign('id_pemilik')->references('id')->on('users');
        });
        Schema::table('montir', function (Blueprint $table) {
            $table->foreign('id_montir')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pelanggan', function (Blueprint $table) {
            //
        });
    }
}
