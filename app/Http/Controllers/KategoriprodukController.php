<?php

namespace App\Http\Controllers;

use App\KategoriProduk;
use Illuminate\Http\Request;

class KategoriprodukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriproduk = KategoriProduk::all();
        return view('admin.produk.produk_kategori.index', compact('kategoriproduk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produk.produk_kategori.create');
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
            'nama' => 'required',
        ]);

        $tentang = New KategoriProduk;
        $tentang->nama = $request->nama;
        $tentang->save();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect()->route('kategoriproduk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KategoriProduk  $kategoriProduk
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriProduk $kategoriProduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KategoriProduk  $kategoriProduk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategoriproduk = KategoriProduk::find($id);
        return view('admin.produk.produk_kategori.edit', compact('kategoriproduk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KategoriProduk  $kategoriProduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $tentang = KategoriProduk::find($id);
        $tentang->nama = $request->nama;
        $tentang->update();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Diedit');
        return redirect()->route('kategoriproduk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KategoriProduk  $kategoriProduk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategoriproduk = KategoriProduk::find($id);
        $kategoriproduk->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->route('kategoriproduk');
    }
}
