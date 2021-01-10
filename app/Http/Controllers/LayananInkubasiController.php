<?php

namespace App\Http\Controllers;

use App\LayananInkubasi;
use Illuminate\Http\Request;

class LayananInkubasiController extends Controller
{
    public function inkubasi()
    {
        $data = LayananInkubasi::all()->first();
        return view('layanan_inkubasi', compact('data'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inkubasi = LayananInkubasi::all();
        return view('admin.layanan_inkubasi.index', compact('inkubasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layanan_inkubasi.create');
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

        $inkubasi = New LayananInkubasi;
        $inkubasi->judul = $request->judul;
        $inkubasi->desc = $request->desc;

        $file = $request->file('gambar');
            if ($file) {
                $nama_foto = $file->getClientOriginalName();
                $file->move('images/inkubasi', $nama_foto);
                $gambar = 'images/inkubasi/'.$nama_foto;
            }else{
                $gambar = '';
            }
        $inkubasi->gambar = $gambar;

        $inkubasi->save();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect()->route('layanan-inkubasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LayananInkubasi  $layananInkubasi
     * @return \Illuminate\Http\Response
     */
    public function show(LayananInkubasi $layananInkubasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LayananInkubasi  $layananInkubasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = LayananInkubasi::find($id);
        return view('admin.layanan_inkubasi.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LayananInkubasi  $layananInkubasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inkubasi = LayananInkubasi::find($id);
        $inkubasi->judul = $request->judul;
        $inkubasi->desc = $request->desc;

        $file = $request->file('gambar');
            if ($file) {
                $nama_foto = $file->getClientOriginalName();
                $file->move('images/inkubasi', $nama_foto);
                $gambar = 'images/inkubasi/'.$nama_foto;
            }else{
                $gambar = '';
            }
        $inkubasi->gambar = $gambar;

        $inkubasi->update();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Diedit');
        return redirect()->route('layanan-inkubasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LayananInkubasi  $layananInkubasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inkubasi = LayananInkubasi::find($id);
        $inkubasi->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->route('layanan-inkubasi');
    }
}
