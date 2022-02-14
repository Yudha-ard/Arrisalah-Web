<?php

namespace App\Http\Controllers;

use Alert;
use App\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    //== Index ==//
    public function index()
    {
        $data = Kegiatan::latest()->paginate(5);

        return view('back.kegiatan.index', compact('data'));
    }
    //== Create ==//
    public function create()
    {
        return view('back.kegiatan.create');
    }
    //== Store ==//
    public function store(Request $request)
    {
        $request->validate([
            'judul'       =>  'required',
            'gambar'      =>  'required|image|mimes:jpg,png,jpeg,gif,svg',
            'keterangan'  =>  'required|min:10',
        ]);

        $image    = $request->file('gambar');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img/kegiatan_img'), $new_name);
        $form_data = array(
            'judul'      =>   $request->judul,
            'keterangan' =>   $request->keterangan,
            'gambar'     =>   $new_name
        );

        if (Kegiatan::create($form_data)) {
            return redirect('dashboard/kegiatan')->with('create', 'Data Berhasil Di Upload');
        }
    }
    //== Tampil ==//
    public function show()
    {
        return redirect()->route('kegiatan.index');
    }
    //==  Edit ==//
    public function edit($id)
    {
        $data = Kegiatan::findOrFail($id);
        return view('back.kegiatan.edit', compact('data'));
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
            $image->move(public_path('img/kegiatan_img'), $image_name);
        } else
        {
            $request->validate([
                'judul'      =>  'required',
                'keterangan' =>  'required|min:10',
            ]);
        }

        $form_data = array(
            'judul'      =>   $request->judul,
            'keterangan' =>   $request->keterangan,
            'gambar'     =>   $image_name
        );

        if (Kegiatan::whereId($id)->update($form_data)) {
            return redirect('dashboard/kegiatan')->with('edit', 'Data Berhasil Di Update');
        }
    }
    //== Hapus ==//
    public function destroy($id)
    {
        $data = Kegiatan::findOrFail($id);
        
        if ($data->delete()) {
        return redirect('dashboard/kegiatan')->with('delete', 'Data Berhasil Di Hapus');
        }
    }

}
