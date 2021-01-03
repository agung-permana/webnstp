<?php

namespace App\Http\Controllers;

use App\Scene;
use Illuminate\Http\Request;

class PanoramaController extends Controller
{
    public function getData()
    {
        $scene = Scene::all();
        return view('panorama', compact('scene'));
    }
}
