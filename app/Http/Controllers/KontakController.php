<?php

namespace App\Http\Controllers;

use App\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function kontak()
    {
        return view('kontak');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kontak::all();
        return view('admin.kontak.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'email' => 'required',
            'subyek' => 'required',
            'nama_perusahaan' => 'required',
            'pesan' => 'required|min: 12'
        ]);

        $kontak = New Kontak;
        $kontak->nama = $request->nama;
        $kontak->email = $request->email;
        $kontak->subyek = $request->subyek;
        $kontak->nama_perusahaan = $request->nama_perusahaan;
        $kontak->pesan = $request->pesan;
        $kontak->save();
        // return $request;
        return redirect()->route('kontak-kami')->with('status', 'Pesan Sudah Terikirim!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function show(Kontak $kontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function edit(Kontak $kontak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kontak $kontak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemasaran = Kontak::find($id);
        $pemasaran->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->route('kontak');
    }
}
