<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected $fillable = [
    	'barang', 'asal', 'keadaan', 'keterangan'
    ];
}
