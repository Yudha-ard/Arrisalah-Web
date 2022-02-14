<?php

Route::redirect('/logout', '/login');
Route::redirect('/register', '/login');
//==FrontEnd==//
Route::get('/','FrontController@home');
Route::get('/search','FrontController@search');
Route::get('tentang','FrontController@tentang');
Route::get('kontak','FrontController@kontak');
Route::get('berita','FrontController@berita');
Route::get('berita/{beritaum}','FrontController@beritas');
Route::get('galeri','FrontController@galeri');
Route::get('galeri/{galerium}','FrontController@galeris');
Route::get('kegiatan','FrontController@kegiatan');
Route::get('kegiatan/{kegiatanum}','FrontController@kegiatans');
Route::get('pengajar','FrontController@pengajar');
Route::get('pengajar/{pengajarum}','FrontController@pengajars');
Route::get('fasilitas','FrontController@fasilitas');
//==EndFrontEnd==//

//==BackEnd==//
Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::middleware('auth')->group(function() {
    Route::resource('dashboard/berita','BeritaController');
    Route::resource('dashboard/galeri','GaleriController');
    Route::resource('dashboard/kegiatan','KegiatanController');
    Route::resource('dashboard/pengajar','PengajarController');
    Route::resource('dashboard/alumni','AlumniController');
    Route::resource('dashboard/fasilitas','FasilitasController');
    //==Kategori==//
        Route::resource('dashboard/kategori_berita','KategoriBeritaController');
        Route::resource('dashboard/kategori_alumni','KategoriAlumniController');
        Route::resource('dashboard/kategori_galeri','KategoriGaleriController');
        Route::resource('dashboard/kategori_pengajar','KategoriPengajarController');
});    
//==EndBackEnd==//