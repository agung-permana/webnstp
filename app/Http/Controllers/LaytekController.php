<?php

namespace App\Http\Controllers;

use App\Laytek;
use App\Laytekkategori;
use File;
use Illuminate\Http\Request;

class LaytekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Laytek::all();
        return view('admin.laytek.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Laytekkategori::all();
        return view('admin.laytek.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nama' => 'required',
        // ]);

        $tentang = New Laytek;
        $tentang->laytek_id = $request->laytek_id;
        $tentang->judul = $request->judul;

        $thumb = $request->file('thumb');
            if ($thumb) {
                $nama_foto = $thumb->getClientOriginalName();
                $thumbnail->move('images/laytek', $nama_foto);
                $thumbnail = 'images/laytek/'.$nama_foto;
            }else{
                $thumb = '';
            }
        $tentang->save();
        return $request;
        // alert()->success('Berhasil','Data Berhasil Disimpan');
        // return redirect()->route('laytek');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Laytekkategori::find($id);
        return view('admin.laytek.edit', compact('data'));
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
            'nama' => 'required',
        ]);

        $tentang = Laytekkategori::find($id);
        $tentang->nama = $request->nama;
        $tentang->update();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Diedit');
        return redirect()->route('laytek-kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bidang = Laytekkategori::find($id);
        $bidang->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->route('laytek-kategori');
    }
}
