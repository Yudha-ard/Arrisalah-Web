<?php

namespace App\Http\Controllers;

use Alert;
use App\Berita;
use App\Galeri;
use App\Kegiatan;
use App\Pengajar;
use App\Fasilitas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $countB = Berita::count();
        $countG = Galeri::count();
        $countK = Kegiatan::count();
        $countP = Pengajar::count();
        $countF = Fasilitas::count();
        
        return view('back/dashboard',compact('countB', 'countG', 'countK', 'countP','countF'));
    }
}
