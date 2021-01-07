<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lapatek extends Model
{
    protected $table = 'lapetek';

    public function kategori()
    {
        return $this->belongsTo('App\Lapatekkategori', 'lapatek_id', 'id');
    }
}
