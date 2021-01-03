<?php

namespace App\Http\Controllers;

use App\Kedeputian;
use Illuminate\Http\Request;

class KedeputianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kedeputian = Kedeputian::all();
        return view('admin.db_tekno.kedeputian.index', compact('kedeputian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.db_tekno.kedeputian.create');
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
            'nama_kedeputian' => 'required',
        ]);

        $tentang = New Kedeputian;
        $tentang->nama_kedeputian = $request->nama_kedeputian;
        $tentang->save();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect()->route('kedeputian');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kedeputian  $kedeputian
     * @return \Illuminate\Http\Response
     */
    public function show(Kedeputian $kedeputian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kedeputian  $kedeputian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kedeputian = Kedeputian::find($id);
        return view('admin.db_tekno.kedeputian.edit', compact('kedeputian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kedeputian  $kedeputian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kedeputian' => 'required',
        ]);

        $tentang = Kedeputian::find($id);
        $tentang->nama_kedeputian = $request->nama_kedeputian;
        $tentang->update();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Diedit');
        return redirect()->route('kedeputian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kedeputian  $kedeputian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bidang = Kedeputian::find($id);
        $bidang->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->route('kedeputian');
    }
}
