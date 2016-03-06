<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keputusan extends Model
{
    protected $fillable = [
    	'nomor', 'tentang', 'uraian', 'dilaporkan', 'keterangan'
    ];
}
