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
			$table->string('nik')->nullable();
			$table->string('nama');
			$table->string('tempat_lahir')->nullable();
			$table->date('tanggal_lahir')->nullable();
			$table->string('jk')->nullable();
			$table->string('hubungan')->nullable();
			$table->string('status')->nullable();
			$table->string('pendidikan')->nullable();
			$table->string('pekerjaan')->nullable();
			$table->string('gol_darah')->nullable();
			$table->string('agama')->nullable();
			$table->string('nama_ortu')->nullable();
			$table->string('kelainan_mental_fisik')->nullable();
			$table->string('baca_tulis')->nullable();
			$table->string('jenis_akseptor')->nullable();
			$table->string('jenis_layanan_reg_rental')->nullable();
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
		Schema::drop('penduduks');
	}

}
