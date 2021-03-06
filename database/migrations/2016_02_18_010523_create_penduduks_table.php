<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenduduksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('penduduks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama');
			$table->string('nik');
			$table->string('no_ktp')->nullable();
			$table->string('no_kk');
			$table->string('hubungan');
			$table->string('tempat_lahir');
			$table->date('tanggal_lahir')->nullable();
			$table->string('jk');
			$table->string('status');
			$table->string('pendidikan');
			$table->string('pekerjaan');
			$table->string('gol_darah')->nullable();
			$table->string('agama');
			$table->string('ibu');
			$table->string('ayah');
			$table->string('dusun');
			$table->string('rt');
			$table->string('rw');
			$table->string('meninggal')->nullable();
			$table->date('tgl_meninggal')->nullable();
			$table->string('kelainan_mental_fisik')->nullable();
			$table->string('baca_tulis')->nullable();
			$table->string('jenis_akseptor')->nullable();
			$table->string('jenis_layanan_reg_rental')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('penduduks');
	}

}
