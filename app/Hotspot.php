<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotspot extends Model
{
    protected $table = 'hotspot';

    public function scene()
    {
        return $this->belongsTo(Scene::class);
    }
}
