<?php

namespace App\Http\Controllers;

use App\Program;
use Str;
use File;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $program = Program::all();
        return view('admin.program.index', compact('program'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.program.create');
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
            'kategori' => 'required',
            'judul' => 'required',
            'desc' => 'required',
        ]);

        $program = New Program;
        if ($request->has('gambar')){
            $program->kategori = $request->kategori;
            $program->judul = $request->judul;
            $program->desc = $request->desc;
            $program->slug = Str::slug($request->kategori);

            $gambar = $request->gambar;
            $namafile = time().'.'.$gambar->getClientOriginalExtension();
            $gambar->move('images/program', $namafile);

            $program->gambar = $namafile;
        }else{
            $program->kategori = $request->kategori;
            $program->judul = $request->judul;
            $program->desc = $request->desc;
            $program->slug = Str::slug($request->kategori);

        }
        $program->save();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect()->route('program');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $program = Program::where('slug', $slug)->first();
        return view('program', compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $program = Program::find($id);
        return view('admin.program.edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori' => 'required',
            'judul' => 'required',
            'desc' => 'required',
        ]);

        $program = Program::find($id);
        if ($request->has('gambar')){
            $program->kategori = $request->kategori;
            $program->judul = $request->judul;
            $program->desc = $request->desc;
            $program->slug = Str::slug($request->kategori);


            $gambar = $request->gambar;
            $namafile = time().'.'.$gambar->getClientOriginalExtension();
            $gambar->move('images/program', $namafile);

            $program->gambar = $namafile;
        }else{
            $program->kategori = $request->kategori;
            $program->judul = $request->judul;
            $program->desc = $request->desc;
            $program->slug = Str::slug($request->kategori);


        }
        $program->update();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect()->route('program');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = Program::find($id);
        $namafile = $program->gambar;
        File::delete('images/program'.$namafile);
        $program->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->route('program');
    }
}
