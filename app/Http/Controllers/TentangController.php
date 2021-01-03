<?php

namespace App\Http\Controllers;

use App\Tentang;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tentang = Tentang::all();
        return view('admin.home.tentang.index', compact('tentang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.tentang.create');
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
            'tentang' => 'required',
            'link_url' => 'required',
        ]);

        $tentang = New Tentang;
        $tentang->judul = $request->judul;
        $tentang->tentang = $request->tentang;
        $tentang->save();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect()->route('tentang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function show(Tentang $tentang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tentang = Tentang::find($id);
        return view('admin.home.tentang.edit', compact('tentang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tentang = Tentang::find($id);
        $tentang->judul = $request->judul;
        $tentang->tentang = $request->tentang;
        $tentang->save();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Diedit');
        return redirect()->route('tentang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
