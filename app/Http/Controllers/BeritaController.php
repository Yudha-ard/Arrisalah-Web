<?php

namespace App\Http\Controllers;

use Alert;
use App\Berita;
use App\Kategori_Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    //== Index ==//
    public function index()
    {
        $data = Berita::latest()->paginate(5);

        return view('back.berita.index', compact('data'));
    }
    //== Create ==//
    public function create()
    {
        $kategori = Kategori_Berita::all();

        return view('back.berita.create', compact('kategori'));
    }
    //== Store ==//
    public function store(Request $request)
    {
        $request->validate([
            'judul'      =>  'required',
            'konten'     =>  'required|min:10',
            'gambar'     =>  'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $image    = $request->file('gambar');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img/berita_img'), $new_name);
        $form_data = array(
            'judul'       =>   $request->judul,
            'kategori_id' =>   $request->kategori_id,
            'slug'        =>   str_slug($request->judul), 
            'konten'      =>   $request->konten,
            'gambar'      =>   $new_name
        );

        if (Berita::create($form_data)) {
            return redirect('dashboard/berita')->with('create', 'Data Berhasil Di Upload');
        }
    }
    //== Tampil ==//
    public function show()
    {
        return redirect('dashboard/berita');
    }
    //== Edit ==//
    public function edit($id)
    {
        $kategori = Kategori_Berita::all();
        $data     = Berita::findOrFail($id);

        return view('back.berita.edit', compact('data', 'kategori'));
    }
    //== Update ==//
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image      = $request->file('gambar');
        if($image  != '')
        {
            $request->validate([
                'judul'    =>  'required',
                'konten'   =>  'required|min:10',
                'gambar'   =>  'required|image|mimes:jpg,png,jpeg,gif,svg'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/berita_img'), $image_name);
        } else
        {
            $request->validate([
                'judul'       =>  'required',
                'kategori_id' =>  'required',
                'konten'      =>  'required|min:10',
            ]);
        }

        $form_data = array(
            'judul'       =>   $request->judul,
            'kategori_id' =>   $request->kategori_id,
            'slug'        =>   str_slug($request->judul),
            'konten'      =>   $request->konten,
            'gambar'      =>   $image_name
        );
        
        if (Berita::whereId($id)->update($form_data)) {
            return redirect('dashboard/berita')->with('edit', 'Data Berhasil Di Update');
        }
    }
    //== Hapus ==//
    public function destroy($id)
    {
        $data = Berita::findOrFail($id);

        if ($data->delete()) {
            return redirect()->back()->with('delete', 'Data Berhasil Di hapus');
        }
    }
}
