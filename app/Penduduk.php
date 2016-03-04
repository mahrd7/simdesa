<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    /**
	 * Fillable fields for a tag
	 *
	 * @var array
	 */
	protected $fillable = [
		'nik',
		'nama',
		'tempat_lahir',
		'tanggal_lahir',
		'jk',
		'hubungan',
		'status',
		'pendidikan',
		'pekerjaan',
		'gol_darah',
		'agama',
		'nama_ortu',
		'kelainan_mental_fisik',
		'baca_tulis',
		'jenis_akseptor',
		'jenis_layanan_reg_rental'

	];
}
