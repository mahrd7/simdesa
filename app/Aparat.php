<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aparat extends Model
{
    /**
	 * Fillable fields for a tag
	 *
	 * @var array
	 */
    protected $fillable = [
    	'nama',
    	'niap',
    	'nip',
    	'jk',
    	'tempat_lahir',
    	'tanggal_lahir',
    	'agama',
    	'pangkat',
    	'golongan',
    	'jabatan',
    	'pendidikan',
    	'pengangkatan',
    	'pemberhentian',
    	'keterangan'
    ];

}
