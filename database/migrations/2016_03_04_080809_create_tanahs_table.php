<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTanahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('jumlah');
            $table->integer('hm')->nullable();
            $table->integer('hgb')->nullable();
            $table->integer('hp')->nullable();
            $table->integer('hgu')->nullable();
            $table->integer('hpl')->nullable();
            $table->integer('ma')->nullable();
            $table->integer('vi')->nullable();
            $table->integer('tn')->nullable();
            $table->integer('perumahan')->nullable();
            $table->integer('perdagangan')->nullable();
            $table->integer('perkantoran')->nullable();
            $table->integer('industri')->nullable();
            $table->integer('fasilitas')->nullable();
            $table->integer('sawah')->nullable();
            $table->integer('tegalan')->nullable();
            $table->integer('perkebunan')->nullable();
            $table->integer('peternakan')->nullable();
            $table->integer('hutan_belukar')->nullable();
            $table->integer('hutan_lebat')->nullable();
            $table->integer('kosong')->nullable();
            $table->integer('lain_lain')->nullable();
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
        Schema::drop('tanahs');
    }
}
