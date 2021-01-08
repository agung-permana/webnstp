<?php

namespace App\Http\Controllers;

use App\Lapatek;
use App\Lapatekkategori;
use File;
use Str;
use Illuminate\Http\Request;

class LapatekController extends Controller
{
    public function lapatek()
    {
        $data = lapatek::all();
        return view('lapatek', compact('data'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = lapatek::all();
        return view('admin.lapatek.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = lapatekkategori::all();
        return view('admin.lapatek.create', compact('kategori'));
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

        $lapatek = New Lapatek;
        $lapatek->lapatek_id = $request->lapatek_id;
        $lapatek->judul = $request->judul;
        $lapatek->slug = Str::slug($request->judul);
        $lapatek->desc = $request->desc;

        $thumb = $request->thumb;
        $namafile = time().'.'.$thumb->getClientOriginalExtension();
        $thumb->move('images/lapatek', $namafile);
        $lapatek->thumb = $namafile;

        $file = $request->file('gambar1');
            if ($file) {
                $nama_foto = $file->getClientOriginalName();
                $file->move('images/lapatek', $nama_foto);
                $gambar1 = 'images/lapatek/'.$nama_foto;
            }else{
                $gambar1 = '';
            }
        $lapatek->gambar1 = $gambar1;

        $file = $request->file('gambar2');
            if ($file) {
                $nama_foto = $file->getClientOriginalName();
                $file->move('images/lapatek', $nama_foto);
                $gambar2 = 'images/lapatek/'.$nama_foto;
            }else{
                $gambar2 = '';
            }
        $lapatek->gambar2 = $gambar2;

        $file = $request->file('gambar3');
            if ($file) {
                $nama_foto = $file->getClientOriginalName();
                $file->move('images/lapatek', $nama_foto);
                $gambar3 = 'images/lapatek/'.$nama_foto;
            }else{
                $gambar3 = '';
            }
        $lapatek->gambar3 = $gambar3;

        $file = $request->file('gambar4');
            if ($file) {
                $nama_foto = $file->getClientOriginalName();
                $file->move('images/lapatek', $nama_foto);
                $gambar4 = 'images/lapatek/'.$nama_foto;
            }else{
                $gambar4 = '';
            }
        $lapatek->gambar4 = $gambar4;

        $file = $request->file('gambar5');
            if ($file) {
                $nama_foto = $file->getClientOriginalName();
                $file->move('images/lapatek', $nama_foto);
                $gambar5 = 'images/lapatek/'.$nama_foto;
            }else{
                $gambar5 = '';
            }
        $lapatek->gambar5 = $gambar5;

        
        $lapatek->save();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect()->route('lapatek');
    }

    public function show($slug)
    {
        $show = lapatek::where('slug', $slug)->first();
        return view('lapatek_detail', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Lapatekkategori::all();
        $data = lapatek::find($id);
        return view('admin.lapatek.edit', compact('data', 'kategori'));
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
        $lapatek = Lapatek::find($id);
        if($request->has('thumb')){
            $lapatek->lapatek_id = $request->lapatek_id;
            $lapatek->judul = $request->judul;
            $lapatek->slug = Str::slug($request->judul);
            $lapatek->desc = $request->desc;

            $thumb = $request->thumb;
            $namafile = time().'.'.$thumb->getClientOriginalExtension();
            $thumb->move('images/lapatek', $namafile);
            $lapatek->thumb = $namafile;

        }else{
            $file = $request->file('gambar1');
            if ($file) {
                $nama_foto = $file->getClientOriginalName();
                $file->move('images/lapatek', $nama_foto);
                $gambar1 = 'images/lapatek/'.$nama_foto;
            }else{
                $gambar1 = '';
            }
            $lapatek->gambar1 = $gambar1;

            $file = $request->file('gambar2');
                if ($file) {
                    $nama_foto = $file->getClientOriginalName();
                    $file->move('images/lapatek', $nama_foto);
                    $gambar2 = 'images/lapatek/'.$nama_foto;
                }else{
                    $gambar2 = '';
                }
            $lapatek->gambar2 = $gambar2;

            $file = $request->file('gambar3');
                if ($file) {
                    $nama_foto = $file->getClientOriginalName();
                    $file->move('images/lapatek', $nama_foto);
                    $gambar3 = 'images/lapatek/'.$nama_foto;
                }else{
                    $gambar3 = '';
                }
            $lapatek->gambar3 = $gambar3;

            $file = $request->file('gambar4');
                if ($file) {
                    $nama_foto = $file->getClientOriginalName();
                    $file->move('images/lapatek', $nama_foto);
                    $gambar4 = 'images/lapatek/'.$nama_foto;
                }else{
                    $gambar4 = '';
                }
            $lapatek->gambar4 = $gambar4;

            $file = $request->file('gambar5');
                if ($file) {
                    $nama_foto = $file->getClientOriginalName();
                    $file->move('images/lapatek', $nama_foto);
                    $gambar5 = 'images/lapatek/'.$nama_foto;
                }else{
                    $gambar5 = '';
                }
            $lapatek->gambar5 = $gambar5;

            $lapatek->lapatek_id = $request->lapatek_id;
            $lapatek->judul = $request->judul;
            $lapatek->slug = Str::slug($request->judul);
            $lapatek->desc = $request->desc;
        }

        $lapatek->update();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Diedit');
        return redirect()->route('lapatek');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = Lapatek::find($id);
        $namafile = $program->gambar1;
        $namafile = $program->gambar2;
        $namafile = $program->gambar3;
        $namafile = $program->gambar4;
        $namafile = $program->gambar5;
        $namafile = $program->thumb;
        File::delete('images/lapatek'.$namafile);
        $program->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->route('lapatek');
    }
}
