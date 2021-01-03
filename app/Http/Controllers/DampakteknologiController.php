<?php

namespace App\Http\Controllers;

use App\Dampakteknologi;
use Illuminate\Http\Request;

class DampakteknologiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dampak_teknologi = Dampakteknologi::all();
        return view('admin.db_tekno.skala_dampak_teknologi.index', compact('dampak_teknologi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.db_tekno.skala_dampak_teknologi.create');
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
            'skala_dampak_teknologi' => 'required',
        ]);

        $tentang = New Dampakteknologi;
        $tentang->skala_dampak_teknologi = $request->skala_dampak_teknologi;
        $tentang->save();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect()->route('skala_dampak_teknologi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function show(Bidang $bidang)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dampak_teknologi = Dampakteknologi::find($id);
        return view('admin.db_tekno.skala_dampak_teknologi.edit', compact('dampak_teknologi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'skala_dampak_teknologi' => 'required',
        ]);

        $tentang = Dampakteknologi::find($id);
        $tentang->skala_dampak_teknologi = $request->skala_dampak_teknologi;
        $tentang->update();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Diedit');
        return redirect()->route('skala_dampak_teknologi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skala_dampak_teknologi = Dampakteknologi::find($id);
        $skala_dampak_teknologi->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->route('skala_dampak_teknologi');
    }
}
