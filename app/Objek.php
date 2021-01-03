<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objek extends Model
{
    protected $table = 'object';

    public function scene()
    {
        return $this->belongsTo('App\Scene', 'scene_id', 'id');
    }
}
