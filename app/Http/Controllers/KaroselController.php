<?php

namespace App\Http\Controllers;

use App\Karosel;
use Illuminate\Http\Request;

class KaroselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karosel = Karosel::all();
        return view('admin.home.karosel.index', compact('karosel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.karosel.create');
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
            'gambar' => 'required|image',
        ]);
        
        $karosel = New Karosel;
        $gambar = $request->gambar;
        $namafile = time().'.'.$gambar->getClientOriginalExtension();
        $gambar->move('images/karosel', $namafile);

        $karosel->gambar = $namafile;
        $karosel->save();
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect()->route('karosel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Karosel  $karosel
     * @return \Illuminate\Http\Response
     */
    public function show(Karosel $karosel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Karosel  $karosel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karosel = Karosel::find($id);
        return view('admin.home.karosel.edit', compact('karosel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Karosel  $karosel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'required|image',
        ]);
        
        $karosel = Karosel::find($id);
        $gambar = $request->gambar;
        $namafile = time().'.'.$gambar->getClientOriginalExtension();
        $gambar->move('images/karosel', $namafile);

        $karosel->gambar = $namafile;
        $karosel->update();
        alert()->success('Berhasil','Data Berhasil Diubah');
        return redirect()->route('karosel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Karosel  $karosel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karosel = Karosel::find($id);
        $karosel->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->route('karosel');
    }
}
