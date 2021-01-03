<?php

namespace App\Http\Controllers;

use App\Objek;
use App\Scene;
use Str;
use Illuminate\Http\Request;

class ObjekController extends Controller
{

    public function objek($slug)
    {
        $objek = Objek::where('slug', $slug)->first();
        $scene = Scene::all();
        return view('object3d', compact('objek', 'scene'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scene = Scene::all();
        $objek = Objek::all();
        return view('admin.object.index', compact('objek', 'scene'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $scene = Scene::all();
        return view('admin.object.create', compact('scene'));
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
            'object_name' => 'required',
            'object_file' => 'required',
            'spesifikasi' => 'required',
            'deskripsi' => 'required',
            'alt_name' => 'required',
            'auto_rotate' => 'required',
            'camera_controls' => 'required',
            'background_color' => 'required',
        ]);

        $object = New Objek;
        $object->scene_id = $request->scene_id;
        $object->object_name = $request->object_name;
        $object->slug = Str::slug($request->object_name);
        $object->spesifikasi = $request->spesifikasi;
        $object->deskripsi = $request->deskripsi;
        $object->alt_name = $request->alt_name;
        $object->auto_rotate = $request->auto_rotate;
        $object->camera_controls = $request->camera_controls;
        $object->background_color = $request->background_color;

        $object_file = $request->object_file;
        $namafile = time().'.'.$object_file->getClientOriginalExtension();
        $object_file->move('gambar3d/object', $namafile);

        $object->object_file = $namafile;
        $object->save();
        return redirect()->route('objek')->with('status', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Objek  $objek
     * @return \Illuminate\Http\Response
     */
    public function show(Objek $objek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Objek  $objek
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $object = Objek::find($id);
        $scene = Scene::all();
        return view('admin.object.edit', compact('scene', 'object'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Objek  $objek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $object = Objek::find($id);
        if ($request->has('object_file')) {
            $object->scene_id = $request->scene_id;
            $object->object_name = $request->object_name;
            $object->spesifikasi = $request->spesifikasi;
            $object->deskripsi = $request->deskripsi;
            $object->alt_name = $request->alt_name;
            $object->auto_rotate = $request->auto_rotate;
            $object->camera_controls = $request->camera_controls;
            $object->background_color = $request->background_color;

            $object_file = $request->object_file;
            $namafile = time().'.'.$object_file->getClientOriginalExtension();
            $object_file->move('file/object', $namafile);
            $object->object_file = $namafile;
        }else{
            $object->scene_id = $request->scene_id;
            $object->object_name = $request->object_name;
            $object->spesifikasi = $request->spesifikasi;
            $object->deskripsi = $request->deskripsi;
            $object->alt_name = $request->alt_name;
            $object->auto_rotate = $request->auto_rotate;
            $object->camera_controls = $request->camera_controls;
            $object->background_color = $request->background_color;
        }
        $object->update();
        return redirect()->route('objek')->with('status', 'Data Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Objek  $objek
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objek = Objek::find($id);
        $objek->delete();
        return redirect()->route('objek')->with('status', 'Data Berhasil Dihapus!');
    }
}
