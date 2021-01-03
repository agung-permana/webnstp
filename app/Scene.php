<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scene extends Model
{
    protected $table = 'scene';

    public function hotspot()
    {
        return $this->hasMany(Hotspot::class);
    }

    public function object()
    {
        return $this->hasMany(hotspot::class);
    }
}
