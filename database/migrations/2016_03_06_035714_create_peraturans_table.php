<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeraturansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peraturans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomor');
            $table->string('tentang');
            $table->string('uraian');
            $table->string('persetujuan_bpd');
            $table->string('dilaporkan');
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
        Schema::drop('peraturans');
    }
}
