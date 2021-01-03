<?php

namespace App\Http\Controllers;

use App\Tkt;
use App\Bidang;
use App\Unitkerja;
use App\Kedeputian;
use App\Produktekno;
use Illuminate\Http\Request;

class ProdukteknoController extends Controller
{
    public function produk()
    {
        $unit_kerja = Unitkerja::all();
        $kedeputian = Kedeputian::all();
        $bidang = Bidang::all();
        $produk = Produktekno::all();
        return view('produk_teknologi', compact('unit_kerja', 'kedeputian', 'produk', 'bidang'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unit_kerja = Unitkerja::all();
        $kedeputian = Kedeputian::all();
        $bidang = Bidang::all();
        $produk = Produktekno::all();
        return view('admin.db_tekno.produk_tekno.index', compact('unit_kerja', 'kedeputian', 'produk', 'bidang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kedeputian = Kedeputian::all();
        $unit_kerja = Unitkerja::all();
        $bidang = Bidang::all();
        $tkt = Tkt::all();
        return view('admin.db_tekno.produk_tekno.create', compact('kedeputian', 'unit_kerja', 'tkt', 'bidang'));
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
            'nama_kompetensi' => 'required',
            'deskripsi_kompetensi' => 'required',
            'kedeputian_id' => 'required',
            'unit_kerja_id' => 'required',
            'tugas_unit_kerja' => 'required',
            'fungsi_unit_kerja' => 'required',
            'fasilitas' => 'required',
            'telp' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'website' => 'required',
            'mitra' => 'required',

        ]);

        $tentang = New Layanantekno;
        $tentang->nama_kompetensi = $request->nama_kompetensi;
        $tentang->deskripsi_kompetensi = $request->deskripsi_kompetensi;
        $tentang->kedeputian_id = $request->kedeputian_id;
        $tentang->unit_kerja_id = $request->unit_kerja_id;
        $tentang->tugas_unit_kerja = $request->tugas_unit_kerja;
        $tentang->fungsi_unit_kerja = $request->fungsi_unit_kerja;
        $tentang->fasilitas = $request->fasilitas;
        $tentang->telp = $request->telp;
        $tentang->email = $request->email;
        $tentang->alamat = $request->alamat;
        $tentang->website = $request->website;
        $tentang->mitra = $request->mitra;

        $tentang->save();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect()->route('layanantekno');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unit_kerja = Unitkerja::all();
        $kedeputian = Kedeputian::all();
        $layanan = Layanantekno::find($id);
        return view('admin.db_tekno.layanan_tekno.show', compact('unit_kerja', 'kedeputian', 'layanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kedeputian = Kedeputian::all();
        $unit_kerja = Unitkerja::all();
        $kompetensi = Kompetensi::find($id);
        return view('admin.db_tekno.kompetensi.edit', compact('unit_kerja', 'kedeputian', 'kompetensi'));
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
        $tentang = Layanantekno::find($id);
        $tentang->nama_kompetensi = $request->nama_kompetensi;
        $tentang->deskripsi_kompetensi = $request->deskripsi_kompetensi;
        $tentang->kedeputian_id = $request->kedeputian_id;
        $tentang->unit_kerja_id = $request->unit_kerja_id;
        $tentang->tugas_unit_kerja = $request->tugas_unit_kerja;
        $tentang->fungsi_unit_kerja = $request->fungsi_unit_kerja;
        $tentang->fasilitas = $request->fasilitas;
        $tentang->telp = $request->telp;
        $tentang->email = $request->email;
        $tentang->alamat = $request->alamat;
        $tentang->website = $request->website;
        $tentang->mitra = $request->mitra;

        $tentang->update();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Diedit');
        return redirect()->route('layanantekno');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unit_kerja = Layanantekno::find($id);
        $unit_kerja->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->route('layanantekno');
    }
}
