<?php

namespace App\Http\Controllers;

use Alert;
use App\Kategori_Pengajar;
use Illuminate\Http\Request;

class KategoriPengajarController extends Controller
{
    //== Index ==//
    public function index()
    {
        $kategori = Kategori_Pengajar::latest()->paginate(env('PER_PAGE'));

        return view('back.kategori_pengajar.index', compact('kategori'));
    }
    //== Create ==//
    public function create()
    {
        return view('back.kategori_pengajar.create');
    }
    //== Store ==//
    public function store()
    {
        $this->validate(request(), [
            'nama' => 'required|min:5',
        ]);

        if (Kategori_Pengajar::create([
            'nama' => request('nama'),
            
        ])) {

            return redirect()->route('kategori_pengajar.index')->with('create', 'Data Berhasil Di Update');
        }   
    }
    //== Tampil ==//
    public function show()
    {
        return redirect()->route('kategori_pengajar.index');
    }
    //== Edit ==//
    public function edit($id)
    {
        $data = Kategori_Pengajar::findOrFail($id);
        return view('back.kategori_pengajar.edit', compact('data'));
    }
    //== Update ==//
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'nama' => 'required|min:5',
        ]);
        
        if (Kategori_Pengajar::whereId($id)->update([
            'nama' => request('nama'),

        ])) {

            return redirect()->route('kategori_pengajar.index')->with('edit', 'Data Berhasil Di Update');
        }
    }
    //== Hapus ==//
    public function destroy($id)
    {
        $data = Kategori_Pengajar::findOrFail($id);
        if ($data->delete()) {

            return redirect()->route('kategori_pengajar.index')->with('delete', 'Data Berhasil Di Hapus');
        }
    }
}
