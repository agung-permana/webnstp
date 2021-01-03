<?php

namespace App\Http\Controllers;

use App\Bidang;
use App\Unitkerja;
use App\Kedeputian;
use App\Layanantekno;
use Illuminate\Http\Request;

class LayananteknoController extends Controller
{
    public function layanan()
    {
        $unit_kerja = Unitkerja::all();
        $kedeputian = Kedeputian::all();
        $layanan = Layanantekno::all();
        return view('layanan_teknologi', compact('unit_kerja', 'kedeputian', 'layanan'));
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
        $layanan = Layanantekno::all();
        return view('admin.db_tekno.layanan_tekno.index', compact('unit_kerja', 'kedeputian', 'layanan'));
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
        return view('admin.db_tekno.layanan_tekno.create', compact('kedeputian', 'unit_kerja', 'bidang'));
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
            'nama_layanan' => 'required',
            'kedeputian_id' => 'required',
            'unit_kerja_id' => 'required',
            'kontak' => 'required',
            'bidang_teknologi_id' => 'required',
            'deskripsi_singkat' => 'required',
            'spesifikasi_alat' => 'required',
            'fungsi_alat' => 'required',
            'nomor_sertifikasi' => 'required',
            'jenis_akreditasi_sertifikasi' => 'required',
            'lembaga_penerbit_sertifikasi' => 'required',

        ]);

        $tentang = New Layanantekno;
        $tentang->nama_layanan = $request->nama_layanan;
        $tentang->kedeputian_id = $request->kedeputian_id;
        $tentang->unit_kerja_id = $request->unit_kerja_id;
        $tentang->kontak = $request->kontak;
        $tentang->bidang_teknologi_id = $request->bidang_teknologi_id;
        $tentang->deskripsi_singkat = $request->deskripsi_singkat;
        $tentang->spesifikasi_alat = $request->spesifikasi_alat;
        $tentang->fungsi_alat = $request->fungsi_alat;
        $tentang->nomor_sertifikasi = $request->nomor_sertifikasi;
        $tentang->jenis_akreditasi_sertifikasi = $request->jenis_akreditasi_sertifikasi;
        $tentang->lembaga_penerbit_sertifikasi = $request->lembaga_penerbit_sertifikasi;

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
        $bidang = Bidang::all();
        $layanantekno = Layanantekno::find($id);
        return view('admin.db_tekno.layanan_tekno.edit', compact('unit_kerja', 'kedeputian', 'layanantekno', 'bidang'));
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

        $tentang->nama_layanan = $request->nama_layanan;
        $tentang->kedeputian_id = $request->kedeputian_id;
        $tentang->unit_kerja_id = $request->unit_kerja_id;
        $tentang->kontak = $request->kontak;
        $tentang->bidang_teknologi_id = $request->bidang_teknologi_id;
        $tentang->deskripsi_singkat = $request->deskripsi_singkat;
        $tentang->spesifikasi_alat = $request->spesifikasi_alat;
        $tentang->fungsi_alat = $request->fungsi_alat;
        $tentang->nomor_sertifikasi = $request->nomor_sertifikasi;
        $tentang->jenis_akreditasi_sertifikasi = $request->jenis_akreditasi_sertifikasi;
        $tentang->lembaga_penerbit_sertifikasi = $request->lembaga_penerbit_sertifikasi;

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
