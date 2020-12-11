<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMajalahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('majalah', function (Blueprint $table) {
            $table->increments('kd_majalah');
            $table->string('judul_majalah');
            $table->longText('isi_majalah');
            $table->integer('kd_kategori');
            $table->string('foto');
            $table->string('tgl_rilis');
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
        Schema::dropIfExists('majalah');
    }
}
