<?php

namespace App\Http\Controllers;

use App\lapetek;
use App\lapetekkategori;
use File;
use Str;
use Illuminate\Http\Request;

class lapetekController extends Controller
{
    public function lapetek()
    {
        $data = lapetek::all();
        return view('lapetek', compact('data'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = lapetek::all();
        return view('admin.lapetek.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = lapetekkategori::all();
        return view('admin.lapetek.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nama' => 'required',
        // ]);

        $lapetek = New lapetek;
        $lapetek->lapetek_id = $request->lapetek_id;
        $lapetek->judul = $request->judul;
        $lapetek->slug = Str::slug($request->judul);
        $lapetek->desc = $request->desc;

        $thumb = $request->thumb;
        $namafile = time().'.'.$thumb->getClientOriginalExtension();
        $thumb->move('images/lapetek', $namafile);
        $lapetek->thumb = $namafile;

        $gambar1 = $request->gambar1;
        $namafile = time().'.'.$gambar1->getClientOriginalExtension();
        $gambar1->move('images/lapetek', $namafile);
        $lapetek->gambar1 = $namafile;

        $gambar2 = $request->gambar2;
        $namafile = time().'.'.$gambar2->getClientOriginalExtension();
        $gambar2->move('images/lapetek', $namafile);
        $lapetek->gambar2 = $namafile;

        $file = $request->file('gambar3');
            if ($file) {
                $nama_foto = $file->getClientOriginalName();
                $file->move('images/lapetek', $nama_foto);
                $gambar3 = 'images/lapetek/'.$nama_foto;
            }else{
                $gambar3 = '';
            }
        $lapetek->gambar3 = $gambar3;

        $file = $request->file('gambar4');
            if ($file) {
                $nama_foto = $file->getClientOriginalName();
                $file->move('images/lapetek', $nama_foto);
                $gambar4 = 'images/lapetek/'.$nama_foto;
            }else{
                $gambar4 = '';
            }
        $lapetek->gambar4 = $gambar4;

        $file = $request->file('gambar5');
            if ($file) {
                $nama_foto = $file->getClientOriginalName();
                $file->move('images/lapetek', $nama_foto);
                $gambar5 = 'images/lapetek/'.$nama_foto;
            }else{
                $gambar5 = '';
            }
        $lapetek->gambar5 = $gambar5;

        
        $lapetek->save();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect()->route('lapetek');
    }

    public function show($slug)
    {
        $show = lapetek::where('slug', $slug)->first();
        return view('lapetek_detail', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = lapetekkategori::all();
        $data = lapetek::find($id);
        return view('admin.lapetek.edit', compact('data', 'kategori'));
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
        $lapetek = lapetek::find($id);
        if($request->has('thumb')){
            $lapetek->lapetek_id = $request->lapetek_id;
            $lapetek->judul = $request->judul;
            $lapetek->slug = Str::slug($request->judul);
            $lapetek->desc = $request->desc;

            $thumb = $request->thumb;
            $namafile = time().'.'.$thumb->getClientOriginalExtension();
            $thumb->move('images/lapetek', $namafile);

            $lapetek->thumb = $namafile;

            $gambar1 = $request->gambar1;
            $namafile = time().'.'.$gambar1->getClientOriginalExtension();
            $gambar1->move('images/lapetek', $namafile);
            $lapetek->gambar1 = $namafile;

            $gambar2 = $request->gambar2;
            $namafile = time().'.'.$gambar2->getClientOriginalExtension();
            $gambar2->move('images/lapetek', $namafile);
            $lapetek->gambar2 = $namafile;

            $gambar3 = $request->gambar3;
            $namafile = time().'.'.$gambar3->getClientOriginalExtension();
            $gambar3->move('images/lapetek', $namafile);
            $lapetek->gambar3 = $namafile;

            $gambar4 = $request->gambar4;
            $namafile = time().'.'.$gambar4->getClientOriginalExtension();
            $gambar4->move('images/lapetek', $namafile);
            $lapetek->gambar4 = $namafile;

            $file = $request->file('gambar5');
                if ($file) {
                    $nama_foto = $file->getClientOriginalName();
                    $file->move('images/lapetek', $nama_foto);
                    $gambar5 = 'images/lapetek/'.$nama_foto;
                }else{
                    $gambar5 = '';
                }
            $lapetek->gambar5 = $gambar5;
        }else{
            $lapetek->lapetek_id = $request->laytek_id;
            $laytek->judul = $request->judul;
            $laytek->slug = Str::slug($request->judul);
            $laytek->desc = $request->desc;
        }

        $laytek->update();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Diedit');
        return redirect()->route('lapetek');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = lapetek::find($id);
        $namafile = $program->gambar1;
        $namafile = $program->gambar2;
        $namafile = $program->gambar3;
        $namafile = $program->gambar4;
        $namafile = $program->gambar5;
        $namafile = $program->thumb;
        File::delete('images/lapetek'.$namafile);
        $program->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->route('lapetek');
    }
}
