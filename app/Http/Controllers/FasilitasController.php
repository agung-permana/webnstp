<?php

namespace App\Http\Controllers;

use App\Fasilitas;
use Str;
use File;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view('admin.fasilitas.index', compact('fasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fasilitas.create');
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
            'kategori' => 'required',
            'judul' => 'required',
            'gambar' => 'required|image',
        ]);

        $fasilitas = New Fasilitas;
        if ($request->has('gambar')){
            $fasilitas->kategori = $request->kategori;
            $fasilitas->judul = $request->judul;
            $fasilitas->slug = Str::slug($request->kategori);
            $fasilitas->desc = $request->desc;
            
            $gambar = $request->gambar;
            $namafile = time().'.'.$gambar->getClientOriginalExtension();
            $gambar->move('images/fasilitas', $namafile);

            $fasilitas->gambar = $namafile;
        }else{
            $fasilitas->kategori = $request->kategori;
            $fasilitas->judul = $request->judul;
            $fasilitas->slug = Str::slug($request->kategori);
            $fasilitas->desc = $request->desc;    
        }

        $fasilitas->save();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect()->route('fasilitas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $fasilitas = Fasilitas::all();
        return view('fasilitas', compact('fasilitas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fasilitas = Fasilitas::find($id);
        return view('admin.fasilitas.edit', compact('fasilitas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fasilitas = Fasilitas::find($id);
        if ($request->has('gambar')){
            $fasilitas->kategori = $request->kategori;
            $fasilitas->judul = $request->judul;
            $fasilitas->slug = Str::slug($request->kategori);
            $fasilitas->desc = $request->desc;
            
            $gambar = $request->gambar;
            $namafile = time().'.'.$gambar->getClientOriginalExtension();
            $gambar->move('images/fasilitas', $namafile);

            $fasilitas->gambar = $namafile;
        }else{
            $fasilitas->kategori = $request->kategori;
            $fasilitas->judul = $request->judul;
            $fasilitas->slug = Str::slug($request->kategori);
            $fasilitas->desc = $request->desc;   
        }

        $fasilitas->update();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Diubah');
        return redirect()->route('fasilitas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fasilitas = fasilitas::find($id);
        $namafile = $fasilitas->gambar;
        File::delete('images/fasilitas'.$namafile);
        $fasilitas->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->route('fasilitas');
    }
}
