<?php

namespace App\Http\Controllers;

use Alert;
use App\Kategori_Berita;
use Illuminate\Http\Request;

class KategoriBeritaController extends Controller
{
    //== Index ==//
    public function index()
    {
        $kategori = Kategori_Berita::latest()->paginate(env('PER_PAGE'));

        return view('back.kategori_berita.index', compact('kategori'));//
    }
    //== Create ==//
    public function create()
    {
        return view('back.kategori_berita.create');
    }
    //== Store ==//
    public function store()
    {
        $this->validate(request(), [
            'nama' => 'required',
            'slug' => 'required|min:5',
        ]);

        if (Kategori_Berita::create([
            'nama' => request('nama'),
            'slug' => request('slug'),
            
        ])) {

            return redirect()->route('kategori_berita.index')->with('create', 'Data Berhasil Di Upload');
        }
    }
    //==  Tampil ==//
    public function show()
    {
        return redirect()->route('kategori_berita.index');
    }
    //== Edit ==//
    public function edit($id)
    {
        $data = Kategori_Berita::findOrFail($id);
        return view('back.kategori_berita.edit', compact('data'));
    }
    //== Update ==//
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'nama' => 'required',
            'slug' => 'required|min:5',
        ]);

        if (Kategori_Berita::whereId($id)->update([
            'nama' => request('nama'),
            'slug' => request('slug')

        ])) {

            return redirect()->route('kategori_berita.index')->with('edit', 'Data Berhail Di Update');
        }
    }
    //== Hapus ==//
    public function destroy($id)
    {
        $data = Kategori_Berita::findOrFail($id);
        
        if ($data->delete()) {
            return redirect()->route('kategori_berita.index')->with('delete', 'Data Berhasil Di Hapus');
        }
    }
}
