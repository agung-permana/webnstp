<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Karosel;
use App\Tentang;
use App\Profil;
use App\Produk;
use App\KategoriProduk;
use App\Lab;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        $tentang = Tentang::all();
        $karosel = Karosel::all();
        $produk = Produk::all();
        $lab = Lab::all();
        $kategoriproduk = KategoriProduk::all();
        return view('welcome', compact('slider', 'tentang', 'karosel', 'produk', 'kategoriproduk', 'lab'));
    }

    public function profil($slug)
    {
        $profil = Profil::where('slug', $slug)->first(); 
        return view('welcome', compact('profil'));
    }

    // public function k_profil()
    // {
    //     $k_profil = KategoriProfil::all();
    //     return view('/template/master', compact('k_profil'));
    // }
}
