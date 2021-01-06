<?php

namespace App\Http\Controllers;

use App\Laytek;
use App\Laytekkategori;
use File;
use Str;
use Illuminate\Http\Request;

class LaytekController extends Controller
{
    public function laytek()
    {
        $data = Laytek::all();
        return view('laytek', compact('data'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Laytek::all();
        return view('admin.laytek.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Laytekkategori::all();
        return view('admin.laytek.create', compact('kategori'));
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

        $laytek = New Laytek;
        $laytek->laytek_id = $request->laytek_id;
        $laytek->judul = $request->judul;
        $laytek->slug = Str::slug($request->judul);
        $laytek->desc = $request->desc;

        $thumb = $request->thumb;
        $namafile = time().'.'.$thumb->getClientOriginalExtension();
        $thumb->move('images/laytek', $namafile);
        $laytek->thumb = $namafile;

        $gambar1 = $request->gambar1;
        $namafile = time().'.'.$gambar1->getClientOriginalExtension();
        $gambar1->move('images/laytek', $namafile);
        $laytek->gambar1 = $namafile;

        $gambar2 = $request->gambar2;
        $namafile = time().'.'.$gambar2->getClientOriginalExtension();
        $gambar2->move('images/laytek', $namafile);
        $laytek->gambar2 = $namafile;

        $gambar3 = $request->gambar3;
        $namafile = time().'.'.$gambar3->getClientOriginalExtension();
        $gambar3->move('images/laytek', $namafile);
        $laytek->gambar3 = $namafile;

        $gambar4 = $request->gambar4;
        $namafile = time().'.'.$gambar4->getClientOriginalExtension();
        $gambar4->move('images/laytek', $namafile);
        $laytek->gambar4 = $namafile;

        $file = $request->file('gambar5');
            if ($file) {
                $nama_foto = $file->getClientOriginalName();
                $file->move('images/laytek', $nama_foto);
                $gambar5 = 'images/laytek/'.$nama_foto;
            }else{
                $gambar5 = '';
            }
        $laytek->gambar5 = $gambar5;

        
        $laytek->save();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect()->route('laytek');
    }

    public function show($slug)
    {
        $show = Laytek::where('slug', $slug)->first();
        return view('laytek_detail', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Laytekkategori::all();
        $data = Laytek::find($id);
        return view('admin.laytek.edit', compact('data', 'kategori'));
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
        $laytek = Laytek::find($id);
        if($request->has('thumb')){
            $laytek->laytek_id = $request->laytek_id;
            $laytek->judul = $request->judul;
            $laytek->slug = Str::slug($request->judul);
            $laytek->desc = $request->desc;

            $thumb = $request->thumb;
            $namafile = time().'.'.$thumb->getClientOriginalExtension();
            $thumb->move('images/laytek', $namafile);

            $laytek->thumb = $namafile;

            $gambar1 = $request->gambar1;
            $namafile = time().'.'.$gambar1->getClientOriginalExtension();
            $gambar1->move('images/laytek', $namafile);
            $laytek->gambar1 = $namafile;

            $gambar2 = $request->gambar2;
            $namafile = time().'.'.$gambar2->getClientOriginalExtension();
            $gambar2->move('images/laytek', $namafile);
            $laytek->gambar2 = $namafile;

            $gambar3 = $request->gambar3;
            $namafile = time().'.'.$gambar3->getClientOriginalExtension();
            $gambar3->move('images/laytek', $namafile);
            $laytek->gambar3 = $namafile;

            $gambar4 = $request->gambar4;
            $namafile = time().'.'.$gambar4->getClientOriginalExtension();
            $gambar4->move('images/laytek', $namafile);
            $laytek->gambar4 = $namafile;

            $file = $request->file('gambar5');
                if ($file) {
                    $nama_foto = $file->getClientOriginalName();
                    $file->move('images/laytek', $nama_foto);
                    $gambar5 = 'images/laytek/'.$nama_foto;
                }else{
                    $gambar5 = '';
                }
            $laytek->gambar5 = $gambar5;
        }else{
            $laytek->laytek_id = $request->laytek_id;
            $laytek->judul = $request->judul;
            $laytek->slug = Str::slug($request->judul);
            $laytek->desc = $request->desc;
        }

        $laytek->update();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Diedit');
        return redirect()->route('laytek');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = Laytek::find($id);
        $namafile = $program->gambar1;
        $namafile = $program->gambar2;
        $namafile = $program->gambar3;
        $namafile = $program->gambar4;
        $namafile = $program->gambar5;
        $namafile = $program->thumb;
        File::delete('images/laytek'.$namafile);
        $program->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->route('laytek');
    }
}
