<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peraturan extends Model
{
    protected $fillable = [
    	'nomor', 'tentang', 'uraian', 'dilaporkan', 'persetujuan_bpd','keterangan'
    ];
}
