<?php

namespace App\Http\Controllers;

use App\Lab;
use Illuminate\Http\Request;

class LabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lab = Lab::all();
        return view('admin.lab.index', compact('lab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lab.create');
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
            'nama_lab' => 'required',
            'lokasi' => 'required',
        ]);

        $lab = New Lab;
        $lab->nama_lab = $request->nama_lab;
        $lab->lokasi = $request->lokasi;
        $lab->save();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect()->route('lab');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function show(Lab $lab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lab = Lab::find($id);
        return view('admin.lab.edit', compact('lab'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lab = Lab::find($id);
        $lab->nama_lab = $request->nama_lab;
        $lab->lokasi = $request->lokasi;
        $lab->update();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Diedit');
        return redirect()->route('lab');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lab = Lab::find($id);
        $lab->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->route('lab');
    }
}
