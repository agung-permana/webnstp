<?php

namespace App\Http\Controllers;

use Alert;
use File;
use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::all();
        return view('admin.home.slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.slider.tambah');
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
            'nama_ruang' => 'required',
            'nama_gedung' => 'required',
            'lokasi' => 'required',
            'gambar' => 'required|image'
        ]);

        $slider = New Slider;
        $slider->nama_ruang = $request->nama_ruang;
        $slider->nama_gedung = $request->nama_gedung;
        $slider->lokasi = $request->lokasi;

        $gambar = $request->gambar;
        $namafile = time().'.'.$gambar->getClientOriginalExtension();
        $gambar->move('images/', $namafile);

        $slider->gambar = $namafile;
        $slider->save();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect()->route('slider');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.home.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_ruang' => 'required',
            'nama_gedung' => 'required',
            'lokasi' => 'required',
        ]);

        $slider = Slider::find($id);
        if ($request->has('gambar')){
            $slider->nama_ruang = $request->nama_ruang;
            $slider->nama_gedung = $request->nama_gedung;
            $slider->lokasi = $request->lokasi;
            
            $gambar = $request->gambar;
            $namafile = time().'.'.$gambar->getClientOriginalExtension();
            $gambar->move('images/', $namafile);

            $slider->gambar = $namafile;
        }else{
            $slider->nama_ruang = $request->nama_ruang;
            $slider->nama_gedung = $request->nama_gedung;
            $slider->lokasi = $request->lokasi;
        }
        
        $slider->update();
        // return $request;
        alert()->success('Berhasil','Data Berhasil Diubah');
        return redirect()->route('slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = slider::find($id);
        $namafile = $slider->gambar;
        File::delete('images/'.$namafile);
        $slider->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->route('slider');
    }
}
