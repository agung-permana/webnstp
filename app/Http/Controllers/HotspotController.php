<?php

namespace App\Http\Controllers;

use App\Hotspot;
use App\Scene;
use Illuminate\Http\Request;

class HotspotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scene = Scene::all();
        $hotspot = Hotspot::all();
        return view('admin.hotspot.index', compact('hotspot', 'scene'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $scene = Scene::all();
        return view('admin.hotspot.create', compact('scene'));
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
            'yaw' => 'required',
            'pitch' => 'required',
            'to_scene_id' => 'required',
            'popover_show' => 'required',
            'popover_content' => 'required'
        ]);

        $hotspot = New Hotspot;
        $hotspot->scene_id = $request->scene_id;
        $hotspot->yaw = $request->yaw;
        $hotspot->pitch = $request->pitch;
        $hotspot->to_scene_id = $request->to_scene_id;
        $hotspot->popover_show = $request->popover_show;
        $hotspot->popover_content = $request->popover_content;
        $hotspot->save();
        return redirect()->route('hotspot')->with('status', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotspot  $hotspot
     * @return \Illuminate\Http\Response
     */
    public function show(Hotspot $hotspot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotspot  $hotspot
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $scene = Scene::all();
        $hotspot = Hotspot::find($id);
        return view('admin.hotspot.edit', compact('hotspot', 'scene'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotspot  $hotspot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hotspot = Hotspot::find($id);
        $hotspot->scene_id = $request->scene_id;
        $hotspot->yaw = $request->yaw;
        $hotspot->pitch = $request->pitch;
        $hotspot->to_scene_id = $request->to_scene_id;
        $hotspot->popover_show = $request->popover_show;
        $hotspot->popover_content = $request->popover_content;
        $hotspot->update();
        return redirect()->route('hotspot')->with('status', 'Data Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotspot  $hotspot
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotspot = Hotspot::find($id);
        $hotspot->delete();
        return redirect()->route('hotspot')->with('status', 'Data Berhasil Dihapus!');
    }
}
