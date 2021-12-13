<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDatasrtmhs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_datasrtmhs', function (Blueprint $table) {
            $table->id();
            $table->string('tujuansurat');
            $table->date('Tanggalpelaksa');
            $table->string('lokasikegi');
            $table->string('alamatmitra');
            $table->string('namamitra');
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
        Schema::dropIfExists('table_datasrtmhs');
    }
}
