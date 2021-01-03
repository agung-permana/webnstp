<?php

namespace App\Http\Controllers;

use App\Scene;
use App\Hotspot;
use File;
use Illuminate\Http\Request;

class SceneController extends Controller
{   
    public function panorama()
    {
        $panorama = Scene::all();
        dump($panorama);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scene = Scene::all();
        $hotspot = Hotspot::all();
        return view('admin.scene.index', compact('scene', 'hotspot'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.scene.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'scene_id' => 'required',
            'zoom' => 'required',
            'type' => 'required',
            'title' => 'required',
            'thumb_image' => 'required|image',
            'image' => 'required|image'
        ]);

        $scene = New Scene;
        $scene->scene_id = $request->scene_id;
        $scene->zoom = $request->zoom;
        $scene->type = $request->type;
        $scene->title = $request->title;

        $file = $request->file('thumb_image');
        if ($file) {
            $nama_foto = $file->getClientOriginalName();
            $file->move('images/scene/thumb', $nama_foto);
            $thumb_image = 'images/scene/thumb/'.$nama_foto;
        }else{
            $thumb_image = '';
        }

        $image = $request->image;
        $namafile = time().'.'.$image->getClientOriginalExtension();
        $image->move('images/scene', $namafile);

        $scene->thumb_image = $thumb_image;
        $scene->image = $namafile;
        $scene->save();
        return redirect()->route('scene')->with('status', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Scene  $scene
     * @return \Illuminate\Http\Response
     */
    public function show(Scene $scene)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Scene  $scene
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $scene = Scene::find($id);
        return view('admin.scene.edit', compact('scene'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Scene  $scene
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $scene = Scene::find($id);
        if ($request->has('image')) {
            $scene->scene_id = $request->scene_id;
            $scene->zoom = $request->zoom;
            $scene->type = $request->type;
            $scene->title = $request->title;

            $file = $request->file('thumb_image');
            if ($file) {
                $nama_foto = $file->getClientOriginalName();
                $file->move('images/scene/thumb', $nama_foto);
                $thumb_image = 'images/scene/thumb/'.$nama_foto;
            }else{
                $thumb_image = '';
            }

            $image = $request->image;
            $namafile = time().'.'.$image->getClientOriginalExtension();
            $image->move('images/scene', $namafile);

            $scene->thumb_image = $thumb_image;
            $scene->image = $namafile;
        }else{
            $scene->scene_id = $request->scene_id;
            $scene->zoom = $request->zoom;
            $scene->type = $request->type;
            $scene->title = $request->title;
        }
        $scene->update();
        return redirect()->route('scene')->with('status', 'Data Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Scene  $scene
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $scene = Scene::find($id);
        $image = $scene->image;
        $thumb_image = $scene->thumb_image;
        File::delete('images/scene/thumb/'.$thumb_image);
        File::delete('images/scene/'.$image);
        $scene->delete();
        return redirect()->route('scene')->with('status', 'Data Berhasil Dihapus!');
    }
}
