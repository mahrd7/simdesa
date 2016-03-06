<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAparatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aparats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('niap');
            $table->string('nip');
            $table->string('jk');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('pangkat');
            $table->string('golongan');
            $table->string('jabatan');
            $table->string('pendidikan');
            $table->string('pengangkatan')->nullable();
            $table->string('pemberhentian')->nullable();
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
        Schema::drop('aparats');
    }
}
