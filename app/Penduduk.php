<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Penduduk extends Model
{
    /**
	 * Fillable fields for a tag
	 *
	 * @var array
	 */
	protected $fillable = [
		'nama',
		'nik',
		'no_ktp',
		'no_kk',
		'hubungan',
		'tempat_lahir',
		'tanggal_lahir',
		'jk',
		'status',
		'pendidikan',
		'pekerjaan',
		'gol_darah',
		'agama',
		'ibu',
		'ayah',
		'dusun',
		'rt',
		'rw',
		'meniggal',
		'tgl_meninggal',
		'kelainan_mental_fisik',
		'baca_tulis',
		'jenis_akseptor',
		'jenis_layanan_reg_rental'
	];

	/**
	 * Additional fields to treat as Carbon instances.
	 *
	 * @var array
	 */
	protected $dates = ['tanggal_lahir'];

	/**
	 * Set the published_at arttribute.
	 *
	 * @param $date
	 */
	public function setTanggalLahirAttribute($date)
	{
		$this->attributes['tanggal_lahir'] = Carbon::parse($date);
	}

	/**
	 * Get the published_at attribute.
	 * @param  $date
	 * @return string
	 */
	public function getTanggalLahirAttribute($date)
	{
		return Carbon::parse($date)->format('d-m-Y');
	}
}
