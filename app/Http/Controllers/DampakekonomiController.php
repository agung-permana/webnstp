<?php

namespace App\Http\Controllers;

use App\Dampakekonomi;
use Illuminate\Http\Request;

class DampakekonomiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dampak_ekonomi = Dampakekonomi::all();
        return view('admin.db_tekno.skala_dampak_ekonomi.index', compact('dampak_ekonomi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.db_tekno.skala_dampak_ekonomi.create');
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
            'skala_dampak_ekonomi' => 'required',
        ]);

        $tentang = New Dampakekonomi;
        $tentang->skala_dampak_ekonomi = $request->skala_dampak_ekonomi;
        $tentang->save();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect()->route('skala_dampak_ekonomi');
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
        $dampak_ekonomi = Dampakekonomi::find($id);
        return view('admin.db_tekno.skala_dampak_ekonomi.edit', compact('dampak_ekonomi'));
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
            'skala_dampak_ekonomi' => 'required',
        ]);

        $tentang = Dampakekonomi::find($id);
        $tentang->skala_dampak_ekonomi = $request->skala_dampak_ekonomi;
        $tentang->update();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Diedit');
        return redirect()->route('skala_dampak_ekonomi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skala_dampak_ekonomi = Dampakekonomi::find($id);
        $skala_dampak_ekonomi->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->route('skala_dampak_ekonomi');
    }
}
