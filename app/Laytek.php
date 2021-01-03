<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laytek extends Model
{
    protected $table = 'laytek';

    public function kategori()
    {
        return $this->belongsTo('App\Laytekkategori', 'laytek_id', 'id');
    }
}
