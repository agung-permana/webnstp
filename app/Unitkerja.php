<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unitkerja extends Model
{
    protected $table = 'unit_kerja';

    public function kedeputian()
    {
        return $this->belongsTo('App\Kedeputian', 'kedeputian_id', 'id');
    }
}
