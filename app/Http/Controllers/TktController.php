<?php

namespace App\Http\Controllers;

use App\Tkt;
use Illuminate\Http\Request;

class TktController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tkt = Tkt::all();
        return view('admin.db_tekno.tkt.index', compact('tkt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.db_tekno.tkt.create');
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
            'nama_tkt' => 'required',
        ]);

        $tentang = New Tkt;
        $tentang->nama_tkt = $request->nama_tkt;
        $tentang->save();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect()->route('tkt');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function show(Bidang $bidang)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tkt = Tkt::find($id);
        return view('admin.db_tekno.tkt.edit', compact('tkt'));
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
            'nama_tkt' => 'required',
        ]);

        $tentang = Tkt::find($id);
        $tentang->nama_tkt = $request->nama_tkt;
        $tentang->update();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Diedit');
        return redirect()->route('tkt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tkt = Tkt::find($id);
        $tkt->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->route('tkt');
    }
}
