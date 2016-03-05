<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanah extends Model
{
    /**
	 * Fillable fields for a tag
	 *
	 * @var array
	 */
    protected $fillable = [
    		'nama',
    		'jumlah',
            'hm',
            'hgb',
            'hp',
            'hgu',
            'hpl',
            'ma',
            'vi',
            'tn',
            'perumahan',
            'perdagangan',
            'perkantoran',
            'industri',
            'fasilitas',
            'sawah',
            'tegalan',
            'perkebunan',
            'peternakan',
            'hutan_belukar',
            'hutan_lebat',
            'kosong',
            'lain_lain',
    ];
}
