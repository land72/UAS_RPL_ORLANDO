<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDatadosen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datasuratdosen', function (Blueprint $table) {
            $table->id();
            $table->string('jenissurat');
            $table->date('Tanggalpelaksa');
            $table->string('lokasikegi');
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
        Schema::dropIfExists('table_datadosen');
    }
}
