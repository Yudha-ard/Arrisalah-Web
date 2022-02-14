<?php

namespace App\Http\Controllers;
 
use Alert;
use App\Galeri;
use App\Kategori_Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    //== Index ==//
    public function index()
    {
        $data = Galeri::latest()->paginate(5);

        return view('back.galeri.index', compact('data'));
    }
    //== Create ==//
    public function create()
    {
        $kategori = Kategori_Galeri::all();

        return view('back.galeri.create', compact('kategori'));
    }
    //== Store ==//
    public function store(Request $request)
    {
        $request->validate([
            'judul'       =>  'required',
            'keterangan'  =>  'required|min:10',
            'gambar'      =>  'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $image    = $request->file('gambar');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img/galeri_img'), $new_name);
        $form_data = array(
            'judul'       =>   $request->judul,
            'kategori_id' =>   $request->kategori_id,
            'slug'        =>   str_slug($request->judul), 
            'keterangan'  =>   $request->keterangan,
            'gambar'      =>   $new_name
        );
        if (Galeri::create($form_data)) {
            return redirect('dashboard/galeri')->with('create', 'Data Berhasil Di Upload');
        }
    }
    //== Tampil ==//
    public function show()
    {
        return redirect('dashboard/galeri');
    }
    //== Edit ==//
    public function edit($id)
    {
        $kategori = Kategori_Galeri::all();
        $data = Galeri::findOrFail($id);

        return view('back.galeri.edit', compact('data', 'kategori'));
    }
    //== Update ==//
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image      = $request->file('gambar');
        if($image  != '')
        {
            $request->validate([
                'judul'      =>  'required',
                'keterangan' =>  'required|min:10',
                'gambar'     =>  'required|image|mimes:jpg,png,jpeg,gif,svg'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/galeri_img'), $image_name);
        } else
        {
            $request->validate([
                'judul'       =>  'required',
                'kategori_id' =>  'required',
                'keterangan'  =>  'required',
            ]);
        }

        $form_data = array(
            'judul'        =>   $request->judul,
            'kategori_id'  =>   $request->kategori_id,
            'slug'         =>   str_slug($request->judul),
            'keterangan'   =>   $request->keterangan,
            'gambar'       =>   $image_name
        );

        if (Galeri::whereId($id)->update($form_data)) {
            return redirect('dashboard/galeri')->with('edit', 'Data Berhasil Di Upload');
        }
    }
    //== Hapus ==//
    public function destroy($id)
    {
        $data = Galeri::findOrFail($id);
        
        if ($data->delete()) {
            return redirect('dashboard/galeri')->with('delete', 'Data Berhasil Di Hapus');
        }
    }
}
