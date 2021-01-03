<?php

namespace App\Http\Controllers;

use App\Pemasaran;
use Illuminate\Http\Request;

class PemasaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemasaran = Pemasaran::all();
        return view('admin.db_tekno.pemasaran.index', compact('pemasaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.db_tekno.pemasaran.create');
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
            'pemasaran' => 'required',
        ]);

        $tentang = New Pemasaran;
        $tentang->pemasaran = $request->pemasaran;
        $tentang->save();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect()->route('pemasaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function show(Bidang $bidang)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pemasaran = Pemasaran::find($id);
        return view('admin.db_tekno.pemasaran.edit', compact('pemasaran'));
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
            'pemasaran' => 'required',
        ]);

        $tentang = pemasaran::find($id);
        $tentang->pemasaran = $request->pemasaran;
        $tentang->update();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Diedit');
        return redirect()->route('pemasaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemasaran = pemasaran::find($id);
        $pemasaran->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->route('pemasaran');
    }
}
