<?php

namespace App\Http\Controllers;

use App\Produk;
use App\KategoriProduk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{

    public function produk()
    {
        $kategori = KategoriProduk::all();
        $produk = Produk::all();
        return view('produk', compact('produk', 'kategori'));
    }

    public function produk_detail($kategori_id)
    {
        $kategori = KategoriProduk::all();
        $produk = Produk::where('kategori_id', $kategori_id)->first();
        return view('produk_detail', compact('produk', 'kategori'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        $kategori = KategoriProduk::all();
        return view('admin.produk.index', compact('produk', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = KategoriProduk::all();
        return view('admin.produk.create', compact('kategori'));
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
            'kategori_id' => 'required',
            'nama' => 'required',
            'desc_produk' => 'required',
        ]);

        $produk = New Produk;
        if ($request->has('gambar')){
            $produk->kategori_id = $request->kategori_id;
            $produk->nama = $request->nama;
            $produk->unit_kerja = $request->unit_kerja;
            $produk->desc_produk = $request->desc_produk;
            $produk->nama_peneliti = $request->nama_peneliti;
            $produk->status_haki = $request->status_haki;
            $produk->mitra_kerja = $request->mitra_kerja;
            $produk->trl = $request->trl;
            
            $gambar = $request->gambar;
            $namafile = time().'.'.$gambar->getClientOriginalExtension();
            $gambar->move('images/produk', $namafile);

            $produk->gambar = $namafile;
        }else{
            $produk->kategori_id = $request->kategori_id;
            $produk->nama = $request->nama;
            $produk->desc_produk = $request->desc_produk;
            $produk->nama_peneliti = $request->nama_peneliti;
            $produk->status_haki = $request->status_haki;
            $produk->mitra_kerja = $request->mitra_kerja;
            $produk->rtl = $request->rtl;
        }
        
        $produk->save();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect()->route('produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::find($id);
        $kategori = KategoriProduk::all();
        return view('admin.produk.edit', compact('kategori', 'produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        if ($request->has('gambar')){
            $produk->kategori_id = $request->kategori_id;
            $produk->nama = $request->nama;
            $produk->unit_kerja = $request->unit_kerja;
            $produk->desc_produk = $request->desc_produk;
            $produk->nama_peneliti = $request->nama_peneliti;
            $produk->status_haki = $request->status_haki;
            $produk->mitra_kerja = $request->mitra_kerja;
            $produk->trl = $request->trl;
            
            $gambar = $request->gambar;
            $namafile = time().'.'.$gambar->getClientOriginalExtension();
            $gambar->move('images/produk', $namafile);

            $produk->gambar = $namafile;
        }else{
            $produk->kategori_id = $request->kategori_id;
            $produk->nama = $request->nama;
            $produk->desc_produk = $request->desc_produk;
            $produk->nama_peneliti = $request->nama_peneliti;
            $produk->status_haki = $request->status_haki;
            $produk->mitra_kerja = $request->mitra_kerja;
            $produk->trl = $request->trl;
        }
        
        $produk->update();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Diedit');
        return redirect()->route('produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->route('produk');
    }
}
