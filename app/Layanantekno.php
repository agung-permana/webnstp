<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layanantekno extends Model
{
    protected $table = 'layanan_teknologi';

    public function kedeputian()
    {
        return $this->belongsTo('App\Kedeputian', 'kedeputian_id', 'id');
    }

    public function unit_kerja()
    {
        return $this->belongsTo('App\Unitkerja', 'unit_kerja_id', 'id');
    }

    public function bidang()
    {
        return $this->belongsTo('App\Bidang', 'bidang_teknologi_id', 'id');
    }
}
