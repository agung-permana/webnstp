<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/master', function () {
    return view('layouts/master');
});

Route::get('/video', function () {
    return view('video');
});

Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('dashboard');

Route::get('/', 'GuestController@index')->name('home');

Route::group(['middleware' => 'auth'], function() {
    // Slider
    Route::get('/slider', 'SliderController@index')->name('slider');
    Route::get('/slider/create', 'SliderController@create')->name('slider.create');
    Route::post('/slider/store', 'SliderController@store')->name('slider.store');
    Route::get('/slider/edit/{id}', 'SliderController@edit')->name('slider.edit');
    Route::put('/slider/update/{id}', 'SliderController@update')->name('slider.update');
    Route::delete('/delete/{id}', 'SliderController@destroy')->name('slider.delete');

    // Tentang
    Route::get('/tentang', 'TentangController@index')->name('tentang');
    Route::get('/tentang/create', 'TentangController@create')->name('tentang.create');
    Route::post('/tentang/store', 'TentangController@store')->name('tentang.store');
    Route::get('/tentang/edit/{id}', 'TentangController@edit')->name('tentang.edit');
    Route::put('/tentang/update/{id}', 'TentangController@update')->name('tentang.update');
    // Route::delete('/tentang/delete/{id}', 'TentangController@destroy')->name('tentang.delete');

    // Karosel
    Route::get('/karosel', 'KaroselController@index')->name('karosel');
    Route::get('/karosel/create', 'KaroselController@create')->name('karosel.create');
    Route::post('/karosel/store', 'KaroselController@store')->name('karosel.store');
    Route::get('/karosel/edit/{id}', 'KaroselController@edit')->name('karosel.edit');
    Route::put('/karosel/update/{id}', 'KaroselController@update')->name('karosel.update');
    Route::delete('/karosel/delete/{id}', 'KaroselController@destroy')->name('karosel.delete');

    Route::get('/profil', 'ProfilController@index')->name('profil');
    Route::get('/profil/create', 'ProfilController@create')->name('profil.create');
    Route::post('/profil/store', 'ProfilController@store')->name('profil.store');
    Route::get('/profil/edit/{id}', 'ProfilController@edit')->name('profil.edit');
    Route::put('/profil/update/{id}', 'ProfilController@update')->name('profil.update');
    Route::delete('/profil/delete/{id}', 'ProfilController@destroy')->name('profil.delete');

    Route::get('/fasilitas', 'FasilitasController@index')->name('fasilitas');
    Route::get('/fasilitas/create', 'FasilitasController@create')->name('fasilitas.create');
    Route::post('/fasilitas/store', 'FasilitasController@store')->name('fasilitas.store');
    Route::get('/fasilitas/edit/{id}', 'FasilitasController@edit')->name('fasilitas.edit');
    Route::put('/fasilitas/update/{id}', 'FasilitasController@update')->name('fasilitas.update');
    Route::delete('/fasilitas/delete/{id}', 'FasilitasController@destroy')->name('fasilitas.delete');

    Route::get('/program', 'ProgramController@index')->name('program');
    Route::get('/program/create', 'ProgramController@create')->name('program.create');
    Route::post('/program/store', 'ProgramController@store')->name('program.store');
    Route::get('/program/edit/{id}', 'ProgramController@edit')->name('program.edit');
    Route::put('/program/update/{id}', 'ProgramController@update')->name('program.update');
    Route::delete('/program/delete/{id}', 'ProgramController@destroy')->name('program.delete');

    Route::get('/kategoriproduk', 'KategoriprodukController@index')->name('kategoriproduk');
    Route::get('/kategoriproduk/create', 'KategoriprodukController@create')->name('kategoriproduk.create');
    Route::post('/kategoriproduk/store', 'KategoriprodukController@store')->name('kategoriproduk.store');
    Route::get('/kategoriproduk/edit/{id}', 'KategoriprodukController@edit')->name('kategoriproduk.edit');
    Route::put('/kategoriproduk/update/{id}', 'KategoriprodukController@update')->name('kategoriproduk.update');
    Route::delete('/kategoriproduk/delete/{id}', 'KategoriprodukController@destroy')->name('kategoriproduk.delete');

    Route::get('/produk', 'ProdukController@index')->name('produk');
    Route::get('/produk/create', 'ProdukController@create')->name('produk.create');
    Route::post('/produk/store', 'ProdukController@store')->name('produk.store');
    Route::get('/produk/edit/{id}', 'ProdukController@edit')->name('produk.edit');
    Route::put('/produk/update/{id}', 'ProdukController@update')->name('produk.update');
    Route::delete('/produk/delete/{id}', 'ProdukController@destroy')->name('produk.delete');

    Route::get('/berita', 'BeritaController@index')->name('berita');
    Route::get('/berita/create', 'BeritaController@create')->name('berita.create');
    Route::post('/berita/store', 'BeritaController@store')->name('berita.store');
    Route::get('/berita/edit/{id}', 'BeritaController@edit')->name('berita.edit');
    Route::put('/berita/update/{id}', 'BeritaController@update')->name('berita.update');
    Route::delete('/berita/delete/{id}', 'BeritaController@destroy')->name('berita.delete');
    Route::get('/berita/approve', 'BeritaController@approve')->name('berita.approve');

    Route::get('/lab', 'LabController@index')->name('lab');
    Route::get('/lab/create', 'LabController@create')->name('lab.create');
    Route::post('/lab/store', 'LabController@store')->name('lab.store');
    Route::get('/lab/edit/{id}', 'LabController@edit')->name('lab.edit');
    Route::put('/lab/update/{id}', 'LabController@update')->name('lab.update');
    Route::delete('/lab/delete/{id}', 'LabController@destroy')->name('lab.delete');

    Route::get('scene', 'SceneController@index')->name('scene');
    Route::get('scene/create', 'SceneController@create')->name('scene.create');
    Route::post('scene', 'SceneController@store')->name('scene.store');
    Route::get('scene/edit/{id}', 'SceneController@edit')->name('scene.edit');
    Route::put('scene/{id}', 'SceneController@update')->name('scene.update');
    Route::delete('scene/{id}', 'SceneController@destroy')->name('scene.delete');

    Route::get('hotspot', 'HotspotController@index')->name('hotspot');
    Route::get('hotspot/create', 'HotspotController@create')->name('hotspot.create');
    Route::post('hotspot', 'HotspotController@store')->name('hotspot.store');
    Route::get('hotspot/edit/{id}', 'HotspotController@edit')->name('hotspot.edit');
    Route::put('hotspot/{id}', 'HotspotController@update')->name('hotspot.update');
    Route::delete('hotspot/{id}', 'HotspotController@destroy')->name('hotspot.delete');

    Route::get('objek', 'ObjekController@index')->name('objek');
    Route::get('objek/create', 'ObjekController@create')->name('objek.create');
    Route::post('objek', 'ObjekController@store')->name('objek.store');
    Route::get('objek/edit/{id}', 'ObjekController@edit')->name('objek.edit');
    Route::put('objek/{id}', 'ObjekController@update')->name('objek.update');
    Route::delete('objek/{id}', 'ObjekController@destroy')->name('objek.delete');

    // database-teknologi
    Route::get('bidang', 'BidangController@index')->name('bidang');
    Route::get('bidang/create', 'BidangController@create')->name('bidang.create');
    Route::post('bidang', 'BidangController@store')->name('bidang.store');
    Route::get('bidang/edit/{id}', 'BidangController@edit')->name('bidang.edit');
    Route::put('bidang/{id}', 'BidangController@update')->name('bidang.update');
    Route::delete('bidang/{id}', 'BidangController@destroy')->name('bidang.delete');

    Route::get('kedeputian', 'KedeputianController@index')->name('kedeputian');
    Route::get('kedeputian/create', 'KedeputianController@create')->name('kedeputian.create');
    Route::post('kedeputian', 'KedeputianController@store')->name('kedeputian.store');
    Route::get('kedeputian/edit/{id}', 'KedeputianController@edit')->name('kedeputian.edit');
    Route::put('kedeputian/{id}', 'KedeputianController@update')->name('kedeputian.update');
    Route::delete('kedeputian/{id}', 'KedeputianController@destroy')->name('kedeputian.delete');

    Route::get('pemasaran', 'PemasaranController@index')->name('pemasaran');
    Route::get('pemasaran/create', 'PemasaranController@create')->name('pemasaran.create');
    Route::post('pemasaran', 'PemasaranController@store')->name('pemasaran.store');
    Route::get('pemasaran/edit/{id}', 'PemasaranController@edit')->name('pemasaran.edit');
    Route::put('pemasaran/{id}', 'PemasaranController@update')->name('pemasaran.update');
    Route::delete('pemasaran/{id}', 'PemasaranController@destroy')->name('pemasaran.delete');

    Route::get('skala_dampak_ekonomi', 'DampakekonomiController@index')->name('skala_dampak_ekonomi');
    Route::get('skala_dampak_ekonomi/create', 'DampakekonomiController@create')->name('skala_dampak_ekonomi.create');
    Route::post('skala_dampak_ekonomi', 'DampakekonomiController@store')->name('skala_dampak_ekonomi.store');
    Route::get('skala_dampak_ekonomi/edit/{id}', 'DampakekonomiController@edit')->name('skala_dampak_ekonomi.edit');
    Route::put('skala_dampak_ekonomi/{id}', 'DampakekonomiController@update')->name('skala_dampak_ekonomi.update');
    Route::delete('skala_dampak_ekonomi/{id}', 'DampakekonomiController@destroy')->name('skala_dampak_ekonomi.delete');

    Route::get('skala_dampak_teknologi', 'DampakteknologiController@index')->name('skala_dampak_teknologi');
    Route::get('skala_dampak_teknologi/create', 'DampakteknologiController@create')->name('skala_dampak_teknologi.create');
    Route::post('skala_dampak_teknologi', 'DampakteknologiController@store')->name('skala_dampak_teknologi.store');
    Route::get('skala_dampak_teknologi/edit/{id}', 'DampakteknologiController@edit')->name('skala_dampak_teknologi.edit');
    Route::put('skala_dampak_teknologi/{id}', 'DampakteknologiController@update')->name('skala_dampak_teknologi.update');
    Route::delete('skala_dampak_teknologi/{id}', 'DampakteknologiController@destroy')->name('skala_dampak_teknologi.delete');

    Route::get('tkt', 'TktController@index')->name('tkt');
    Route::get('tkt/create', 'TktController@create')->name('tkt.create');
    Route::post('tkt', 'TktController@store')->name('tkt.store');
    Route::get('tkt/edit/{id}', 'TktController@edit')->name('tkt.edit');
    Route::put('tkt/{id}', 'TktController@update')->name('tkt.update');
    Route::delete('tkt/{id}', 'TktController@destroy')->name('tkt.delete');

    Route::get('unit_kerja', 'UnitkerjaController@index')->name('unit_kerja');
    Route::get('unit_kerja/create', 'UnitkerjaController@create')->name('unit_kerja.create');
    Route::post('unit_kerja', 'UnitkerjaController@store')->name('unit_kerja.store');
    Route::get('unit_kerja/edit/{id}', 'UnitkerjaController@edit')->name('unit_kerja.edit');
    Route::put('unit_kerja/{id}', 'UnitkerjaController@update')->name('unit_kerja.update');
    Route::delete('unit_kerja/{id}', 'UnitkerjaController@destroy')->name('unit_kerja.delete');

    Route::get('kompetensi', 'KompetensiController@index')->name('kompetensi');
    Route::get('kompetensi/create', 'KompetensiController@create')->name('kompetensi.create');
    Route::post('kompetensi', 'KompetensiController@store')->name('kompetensi.store');
    Route::get('kompetensi/{id}', 'KompetensiController@show')->name('kompetensi.show');
    Route::get('kompetensi/edit/{id}', 'KompetensiController@edit')->name('kompetensi.edit');
    Route::put('kompetensi/{id}', 'KompetensiController@update')->name('kompetensi.update');
    Route::delete('kompetensi/{id}', 'KompetensiController@destroy')->name('kompetensi.delete');

    Route::get('layanantekno', 'LayananteknoController@index')->name('layanantekno');
    Route::get('layanantekno/create', 'LayananteknoController@create')->name('layanantekno.create');
    Route::post('layanantekno', 'LayananteknoController@store')->name('layanantekno.store');
    Route::get('layanantekno/{id}', 'LayananteknoController@show')->name('layanantekno.show');
    Route::get('layanantekno/edit/{id}', 'LayananteknoController@edit')->name('layanantekno.edit');
    Route::put('layanantekno/{id}', 'LayananteknoController@update')->name('layanantekno.update');
    Route::delete('layanantekno/{id}', 'LayananteknoController@destroy')->name('layanantekno.delete');

    Route::get('produktekno', 'ProdukteknoController@index')->name('produktekno');
    Route::get('produktekno/create', 'ProdukteknoController@create')->name('produktekno.create');
    Route::post('produktekno', 'ProdukteknoController@store')->name('produktekno.store');
    Route::get('produktekno/{id}', 'ProdukteknoController@show')->name('produktekno.show');
    Route::get('produktekno/edit/{id}', 'ProdukteknoController@edit')->name('produktekno.edit');
    Route::put('produktekno/{id}', 'ProdukteknoController@update')->name('produktekno.update');
    Route::delete('produktekno/{id}', 'ProdukteknoController@destroy')->name('produktekno.delete');

    Route::get('lapetek-kategori', 'LapatekkategoriController@index')->name('lapetek-kategori');
    Route::get('lapetek-kategori/create', 'LapatekkategoriController@create')->name('lapetek-kategori.create');
    Route::post('lapetek-kategori', 'LapatekkategoriController@store')->name('lapetek-kategori.store');
    Route::get('lapetek-kategori/edit/{id}', 'LapatekkategoriController@edit')->name('lapetek-kategori.edit');
    Route::put('lapetek-kategori/{id}', 'LapatekkategoriController@update')->name('lapetek-kategori.update');
    Route::delete('lapetek-kategori/{id}', 'LapatekkategoriController@destroy')->name('lapetek-kategori.delete');

    Route::get('lapetek', 'LapatekController@index')->name('lapatek');
    Route::get('lapatek/create', 'LapatekController@create')->name('lapatek.create');
    Route::post('lapatek', 'LapatekController@store')->name('lapatek.store');
    Route::get('lapatek/edit/{id}', 'LapatekController@edit')->name('lapatek.edit');
    Route::put('lapatek/{id}', 'LapatekController@update')->name('lapatek.update');
    Route::delete('lapatek/{id}', 'LapatekController@destroy')->name('lapatek.delete');
    
    Route::get('laytek-kategori', 'LaytekkategoriController@index')->name('laytek-kategori');
    Route::get('laytek-kategori/create', 'LaytekkategoriController@create')->name('laytek-kategori.create');
    Route::post('laytek-kategori', 'LaytekkategoriController@store')->name('laytek-kategori.store');
    Route::get('laytek-kategori/{id}', 'LaytekkategoriController@show')->name('laytek-kategori.show');
    Route::get('laytek-kategori/edit/{id}', 'LaytekkategoriController@edit')->name('laytek-kategori.edit');
    Route::put('laytek-kategori/{id}', 'LaytekkategoriController@update')->name('laytek-kategori.update');
    Route::delete('laytek-kategori/{id}', 'LaytekkategoriController@destroy')->name('laytek-kategori.delete');
    
    Route::get('laytek', 'LaytekController@index')->name('laytek');
    Route::get('laytek/create', 'LaytekController@create')->name('laytek.create');
    Route::post('laytek', 'LaytekController@store')->name('laytek.store');
    Route::get('laytek/edit/{id}', 'LaytekController@edit')->name('laytek.edit');
    Route::put('laytek/{id}', 'LaytekController@update')->name('laytek.update');
    Route::delete('laytek/{id}', 'LaytekController@destroy')->name('laytek.delete');

    Route::get('layanan-inkubasi', 'LayananInkubasiController@index')->name('layanan-inkubasi');
    Route::get('layanan-inkubasi/create', 'LayananInkubasiController@create')->name('layanan-inkubasi.create');
    Route::post('layanan-inkubasi', 'LayananInkubasiController@store')->name('layanan-inkubasi.store');
    Route::get('layanan-inkubasi/edit/{id}', 'LayananInkubasiController@edit')->name('layanan-inkubasi.edit');
    Route::put('layanan-inkubasi/{id}', 'LayananInkubasiController@update')->name('layanan-inkubasi.update');
    Route::delete('layanan-inkubasi/{id}', 'LayananInkubasiController@destroy')->name('layanan-inkubasi.delete');

    Route::get('/user', 'UserController@index')->name('user');
    Route::get('/user/create', 'UserController@create')->name('user.create');
    Route::post('/user', 'UserController@store')->name('user.store');
    Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
    Route::put('/user/update/{id}', 'UserController@update')->name('user.update');
    Route::delete('/user/delete/{id}', 'UserController@delete')->name('user.hapus');

    Route::get('kompetensi-nstp-bppt', 'KompetensiController@kompetensi')->name('kompetensi');
    Route::get('layanan-teknologi', 'LayananteknoController@layanan')->name('layanan_teknologi');
    Route::get('produk-teknologi', 'ProdukteknoController@produk')->name('produk_teknologi');

    Route::get('kontak', 'KontakController@index')->name('kontak');
    // Route::get('kontak/create', 'KontakController@create')->name('kontak.create');
    Route::get('kontak/edit/{id}', 'KontakController@edit')->name('kontak.edit');
    Route::post('kontak', 'KontakController@update')->name('kontak.update');
    Route::delete('kontak/{id}', 'KontakController@destroy')->name('kontak.delete');
    Route::get('kontak/reply/{id}', 'KontakController@reply')->name('kontak.reply');

});

Route::get('kontak-kami', 'KontakController@kontak')->name('kontak-kami');
Route::post('kontak-kami', 'KontakController@store')->name('kontak.store');



Route::get('layanan-inkubasi-teknologi', 'LayananInkubasiController@inkubasi');

Route::get('layanan-teknis', 'LaytekController@laytek');
Route::get('layanan-teknis/{slug}', 'LaytekController@show')->name('laytek.show');

Route::get('layanan-pengembangan-teknologi', 'LapatekController@lapatek');
Route::get('layanan-pengembangan-teknologi/{slug}', 'LapatekController@show')->name('lapatek.show');

Route::get('/berita-nstp', 'BeritaController@berita')->name('berita-nstp');
Route::get('/berita-nstp/{slug}', 'BeritaController@berita_detail')->name('berita-detail');

Route::get('/produk-nstp', 'ProdukController@produk')->name('produk-nstp');
Route::get('/produk-detail/{kategori_id}', 'ProdukController@produk_detail')->name('produk-detail');
Route::get('/program/{slug}', 'ProgramController@show')->name('program.show');
Route::get('/fasilitas-nstp', 'FasilitasController@show')->name('fasilitas.show');
Route::get('/profil-nstp/{slug}', 'ProfilController@show')->name('profil.show');

Route::get('gambar3d/{slug}', 'ObjekController@objek')->name('object3d');
Route::get('panorama', 'SceneController@panorama')->name('panorama');




