<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table = 'fasilitas';

    public function kategori_fasilitas()
    {
        return $this->belongsTo('App\Fkategori', 'kategori_id', 'id');
    }
}
