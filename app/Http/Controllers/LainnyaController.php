<?php

namespace App\Http\Controllers;

use App\Lainnya;
use Illuminate\Http\Request;

class LainnyaController extends Controller
{
    public function inkubasi()
    {
        $data = Lainnya::all()->first();
        return view('layanan_lainnya', compact('data'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lainnya = Lainnya::all();
        return view('admin.layanan_lainnya.index', compact('lainnya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layanan_lainnya.create');
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

        $lainnya = New Lainnya;
        $lainnya->judul = $request->judul;
        $lainnya->desc = $request->desc;

        $file = $request->file('gambar');
            if ($file) {
                $nama_foto = $file->getClientOriginalName();
                $file->move('images/lainnya', $nama_foto);
                $gambar = 'images/lainnya/'.$nama_foto;
            }else{
                $gambar = '';
            }
        $lainnya->gambar = $gambar;

        $lainnya->save();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect()->route('layanan-lainnya');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lainnya  $Lainnya
     * @return \Illuminate\Http\Response
     */
    public function show(Lainnya $Lainnya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lainnya  $Lainnya
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Lainnya::find($id);
        return view('admin.layanan_lainnya.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lainnya  $Lainnya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lainnya = Lainnya::find($id);
        $lainnya->judul = $request->judul;
        $lainnya->desc = $request->desc;

        $file = $request->file('gambar');
            if ($file) {
                $nama_foto = $file->getClientOriginalName();
                $file->move('images/lainnya', $nama_foto);
                $gambar = 'images/lainnya/'.$nama_foto;
            }else{
                $gambar = '';
            }
        $lainnya->gambar = $gambar;

        $lainnya->update();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Diedit');
        return redirect()->route('layanan-lainnya');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lainnya  $Lainnya
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inkubasi = Lainnya::find($id);
        $inkubasi->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->route('layanan-lainnya');
    }
}
