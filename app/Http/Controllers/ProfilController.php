<?php

namespace App\Http\Controllers;

use App\Profil;
use File;
use Str;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $profil = Profil::all();
        return view('admin.profil.index', compact('profil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profil.create');
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
        ]);

        $profil = New Profil;
        if ($request->has('gambar')){
            $profil->kategori = $request->kategori;
            $profil->judul = $request->judul;
            $profil->desc = $request->desc;
            $profil->slug = Str::slug($request->kategori);

            $gambar = $request->gambar;
            $namafile = time().'.'.$gambar->getClientOriginalExtension();
            $gambar->move('images/profil', $namafile);

            $profil->gambar = $namafile;
        }else{
            $profil->kategori = $request->kategori;
            $profil->judul = $request->judul;
            $profil->desc = $request->desc;
            $profil->slug = Str::slug($request->kategori);

        }
        $profil->save();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect()->route('profil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $profil = Profil::where('slug', $slug)->first();
        return view('profil', compact('profil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profil = Profil::find($id);
        return view('admin.profil.edit', compact('profil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori' => 'required',
            'judul' => 'required',
        ]);
        
        $profil = Profil::find($id);
        if ($request->has('gambar')){
            $profil->kategori = $request->kategori;
            $profil->judul = $request->judul;
            $profil->desc = $request->desc;
            $profil->slug = Str::slug($request->kategori);

            $gambar = $request->gambar;
            $namafile = time().'.'.$gambar->getClientOriginalExtension();
            $gambar->move('images/profil', $namafile);

            $profil->gambar = $namafile;
        }else{
            $profil->kategori = $request->kategori;
            $profil->judul = $request->judul;
            $profil->desc = $request->desc;
            $profil->slug = Str::slug($request->kategori);
        }
        $profil->update();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Diedit');
        return redirect()->route('profil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profil = Profil::find($id);
        $namafile = $profil->gambar;
        File::delete('images/profil'.$namafile);
        $profil->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->route('profil');
    }
}
