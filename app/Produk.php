<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';

    public function kategori_produk()
    {
        return $this->belongsTo('App\KategoriProduk', 'kategori_id', 'id');
    }
}
