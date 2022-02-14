<?php

namespace App\Http\Controllers;

use Alert;
use App\User;
use App\Berita;
use App\Galeri; 
use App\Kegiatan;
use App\Pengajar;
use App\Fasilitas;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //== Home ==//
    public function home()
    {
        $title    = "Asrama Ar-Risalah | Pondok Pesantren Darul 'Ulum (Rejoso) Peterongan Jombang"; 
        $berita   = Berita::latest()->paginate(4);
        $galeri   = Galeri::latest()->paginate(6);
        $kegiatan = Kegiatan::latest()->paginate(3);
        $pengajar = Pengajar::All();
        $user     = User::All();

        return view('front/home', compact('title', 'berita', 'galeri', 'kegiatan', 'pengajar', 'user'));
    }
    //== Berita ==//
    public function berita(Request $request)
    {
        $title    = "Berita | Asrama Ar-Risalah";
        $berita   = Berita::when($request->search, function ($query) use ($request) {
            $query->where('judul', 'like', "%{$request->search}%")
                  ->orWhere('konten', 'like', "%{$request->search}%")
                  ->orWhere('kategori_id', 'like', "%{$request->search}%")
                  ->orWhere('id', 'like', "%{$request->search}%")
                  ->orWhere('slug', 'like', "%{$request->search}%");
                })->paginate(3);
        
        $berita->appends($request->only('search'));

        return view('front/berita.berita', compact('berita', 'title'));
    }
    //== Detail Berita ==//
    public function beritas($id)
    {
        $beritas  = Berita::findOrFail($id);
        $title    = "Berita | Asrama Ar-Risalah";

        return view('front/berita.beritas', compact('beritas', 'title'));
    }
    //== Galeri ==//
    public function galeri(Request $request)
    {
        $title    = "Galeri | Asrama Ar-Risalah | Pondok Pesantren Darul 'Ulum (Rejoso) Peterongan Jombang";
        $galeri   = Galeri::when($request->search, function ($query) use ($request) {
            $query->where('judul', 'like', "%{$request->search}%")
                  ->orWhere('keterangan', 'like', "%{$request->search}%")
                  ->orWhere('kategori_id', 'like', "%{$request->search}%")
                  ->orWhere('slug', 'like', "%{$request->search}%");
                })->paginate(3);
        
        $galeri->appends($request->only('search'));

        return view('front/galeri.galeri', compact('galeri', 'title'));
    }
    //== Detail Berita ==//
    public function galeris($id)
    {
        $galeris  = Galeri::findOrFail($id);
        $title    = "Galeri | Asrama Ar-Risalah | Pondok Pesantren Darul 'Ulum (Rejoso) Peterongan Jombang";

        return view('front/galeri.galeris', compact('galeris', 'title'));
    }
    //== Kegiatan ==//
    public function kegiatan(Request $request)
    {
        $title      = "Kegiatan | Asrama Ar-Risalah | Pondok Pesantren Darul 'Ulum (Rejoso) Peterongan Jombang";
        $kegiatan   = Kegiatan::when($request->search, function ($query) use ($request) {
            $query->where('judul', 'like', "%{$request->search}%")
                  ->orWhere('id', 'like', "%{$request->search}%")
                  ->orWhere('keterangan', 'like', "%{$request->search}%");
                })->paginate(3);
        
        $kegiatan->appends($request->only('search'));

        return view('front/kegiatan.kegiatan', compact('kegiatan', 'title'));
    }
    //== Detail Kegiatan ==//
    public function kegiatans($id)
    {
        $kegiatans = Kegiatan::findOrFail($id);
        $title    = "Kegiatan | Asrama Ar-Risalah | Pondok Pesantren Darul 'Ulum (Rejoso) Peterongan Jombang";

        return view('front/kegiatan.kegiatans', compact('kegiatans', 'title'));
    }
    //== Pengajar ==//
    public function pengajar(Request $request)
    {
        $title      = "pengajar | Asrama Ar-Risalah | Pondok Pesantren Darul 'Ulum (Rejoso) Peterongan Jombang";
        $pengajar   = Pengajar::when($request->search, function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->search}%")
                  ->orWhere('keterangan', 'like', "%{$request->search}%")
                  ->orWhere('kategori_id', 'like', "%{$request->search}%")
                  ->orWhere('id', 'like', "%{$request->search}%")
                  ->orWhere('slug', 'like', "%{$request->search}%");
                })->paginate(5);
        
        $pengajar->appends($request->only('search'));

        return view('front/pengajar.pengajar', compact('pengajar', 'title'));
    }
    //== Detail Pengajar ==//
    public function pengajars($id)
    {
        $pengajars = Pengajar::findOrFail($id);
        $title    = "Pengajar | Asrama Ar-Risalah | Pondok Pesantren Darul 'Ulum (Rejoso) Peterongan Jombang";

        return view('front/pengajar.pengajars', compact('pengajars', 'title'));
    }
    //== Tentang ==//
    public function tentang()
    {
        $title    = "About | Asrama Ar-Risalah | Pondok Pesantren Darul 'Ulum (Rejoso) Peterongan Jombang";

        return view('front/tentang', compact('title'));
    }
    //== Fasilitas ==//
    public function fasilitas(Request $request)
    {
        $title     = "Fasilitas | Asrama Ar-Risalah | Pondok Pesantren Darul 'Ulum (Rejoso) Peterongan Jombang";
        $fasilitas = Fasilitas::paginate(1);
        return view('front/fasilitas.fasilitas', compact('title','fasilitas'));
    }
    //== Kontak ==//
    public function kontak()
    {
        $title    = "Kontak | Asrama Ar-Risalah | Pondok Pesantren Darul 'Ulum (Rejoso) Peterongan Jombang";

        return view('front/kontak', compact('title'));
    }
}
