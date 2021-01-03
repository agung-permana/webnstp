<?php

namespace App\Http\Controllers;

use App\Unitkerja;
use App\Kedeputian;
use Illuminate\Http\Request;

class UnitkerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unit_kerja = Unitkerja::all();
        return view('admin.db_tekno.unit_kerja.index', compact('unit_kerja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kedeputian = Kedeputian::all();
        return view('admin.db_tekno.unit_kerja.create', compact('kedeputian'));
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
            'nama_unit_kerja' => 'required',
            'kedeputian_id' => 'required',
            'kontak_person' => 'required',
            'no_hp' => 'required',
            'no_telp_kantor' => 'required',
            'email' => 'required',
            'alamat_kantor' => 'required',
            'website' => 'required',


        ]);

        $tentang = New Unitkerja;
        $tentang->nama_unit_kerja = $request->nama_unit_kerja;
        $tentang->kedeputian_id = $request->kedeputian_id;
        $tentang->kontak_person = $request->kontak_person;
        $tentang->no_hp = $request->no_hp;
        $tentang->no_telp_kantor = $request->no_telp_kantor;
        $tentang->email = $request->email;
        $tentang->alamat_kantor = $request->alamat_kantor;
        $tentang->website = $request->website;

        $tentang->save();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect()->route('unit_kerja');
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
        $kedeputian = Kedeputian::all();
        $unit_kerja = Unitkerja::find($id);
        return view('admin.db_tekno.unit_kerja.edit', compact('unit_kerja', 'kedeputian'));
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
        $tentang = Unitkerja::find($id);
        $tentang->nama_unit_kerja = $request->nama_unit_kerja;
        $tentang->kedeputian_id = $request->kedeputian_id;
        $tentang->kontak_person = $request->kontak_person;
        $tentang->no_hp = $request->no_hp;
        $tentang->no_telp_kantor = $request->no_telp_kantor;
        $tentang->email = $request->email;
        $tentang->alamat_kantor = $request->alamat_kantor;
        $tentang->website = $request->website;

        $tentang->update();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Diedit');
        return redirect()->route('unit_kerja');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unit_kerja = Unitkerja::find($id);
        $unit_kerja->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->route('unit_kerja');
    }
}
