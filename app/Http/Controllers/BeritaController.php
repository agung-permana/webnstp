<?php

namespace App\Http\Controllers;

use App\Berita;
use Str;
use File;
use Auth;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function berita()
    {
        $berita = Berita::all();
        return view('berita', compact('berita'));
    }

    public function berita_detail($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        return view('berita-detail', compact('berita'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();
        return view('admin.berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berita.create');
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
            'judul' => 'required',
            'desc' => 'required',
        ]);

        $berita = New Berita;
        if ($request->has('gambar')){
            $berita->judul = $request->judul;
            $berita->desc = $request->desc;
            $berita->slug = Str::slug($request->judul);
            $berita->user_id = Auth::id();


            $gambar = $request->gambar;
            $namafile = time().'.'.$gambar->getClientOriginalExtension();
            $gambar->move('images/berita', $namafile);

            $berita->gambar = $namafile;
        }else{
            $berita->judul = $request->judul;
            $berita->desc = $request->desc;
            $berita->slug = Str::slug($request->judul);
            $berita->user_id = Auth::id();
        }
        $berita->save();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect()->route('berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('admin.berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $berita = Berita::find($id);
        if ($request->has('gambar')){
            $berita->judul = $request->judul;
            $berita->desc = $request->desc;
            $berita->slug = Str::slug($request->judul);


            $gambar = $request->gambar;
            $namafile = time().'.'.$gambar->getClientOriginalExtension();
            $gambar->move('images/berita', $namafile);

            $berita->gambar = $namafile;
        }else{
            $berita->judul = $request->judul;
            $berita->desc = $request->desc;
            $berita->slug = Str::slug($request->judul);
        }
        $berita->update();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Diubah');
        return redirect()->route('berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);
        $namafile = $berita->gambar;
        File::delete('images/berita'.$namafile);
        $berita->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->route('berita');
    }
}
