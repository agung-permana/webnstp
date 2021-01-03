<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kompetensi extends Model
{
    protected $table = 'kompetensi';

    public function kedeputian()
    {
        return $this->belongsTo('App\Kedeputian', 'kedeputian_id', 'id');
    }

    public function unit_kerja()
    {
        return $this->belongsTo('App\Unitkerja', 'unit_kerja_id', 'id');
    }
}
