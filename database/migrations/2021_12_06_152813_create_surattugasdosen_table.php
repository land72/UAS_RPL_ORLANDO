<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurattugasdosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surattugasdosen', function (Blueprint $table) {
            $table->id();
            $table->integer('nik');
            $table->string('tujuansurat');
            $table->string('namamitra');
            $table->date('Tanggalpelaksanaan');
            $table->string('lokasikegiatan');
            $table->string('keterangan');
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
        Schema::dropIfExists('surattugasdosen');
    }
}
