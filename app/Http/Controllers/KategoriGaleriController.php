<?php

namespace App\Http\Controllers;

use Alert;
use App\Kategori_Galeri;
use Illuminate\Http\Request;

class KategoriGaleriController extends Controller
{
    //== Index ==//
    public function index()
    {
        $kategori = Kategori_Galeri::latest()->paginate(env('PER_PAGE'));

        return view('back.kategori_galeri.index', compact('kategori'));
    }
    //== Create ==//
    public function create()
    {
        return view('back.kategori_galeri.create');
    }
    //== Store ==//
    public function store()
    {
        $this->validate(request(), [
            'nama' => 'required',
            'slug' => 'required|min:5',
        ]);

        if (Kategori_Galeri::create([
            'nama' => request('nama'),
            'slug' => request('slug'),
            
        ])) {

            return redirect()->route('kategori_galeri.index')->with('create', 'Data Berhasil Di Upload');
        }
    }
    //== Tampil ==//
    public function show()
    {
        return redirect()->route('kategori_galeri.index');
    }
    //== Edit ==//
    public function edit($id)
    {
        $data = Kategori_Galeri::findOrFail($id);
        return view('back.kategori_galeri.edit', compact('data'));
    }
    //== Update ==//
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'nama' => 'required',
            'slug' => 'required|min:5',
        ]);
        
        if (Kategori_Galeri::whereId($id)->update([
            'nama' => request('nama'),
            'slug' => request('slug')

        ])) {

            return redirect()->route('kategori_galeri.index')->with('edit', 'Data Berhasil Di Update');
        }
    }
    //== Hapus ==//
    public function destroy($id)
    {
        $data = Kategori_Galeri::findOrFail($id);
        
        if ($data->delete()) {

            return redirect()->route('kategori_galeri.index')->with('delete', 'Data Berhasil Di Hapus');
        }
    }
}
