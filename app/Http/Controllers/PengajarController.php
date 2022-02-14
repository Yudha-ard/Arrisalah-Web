<?php

namespace App\Http\Controllers;
 
use Alert;
use App\Pengajar;
use App\Kategori_Pengajar; 
use Illuminate\Http\Request;

class PengajarController extends Controller
{
    //== Index ==//
    public function index()
    {
        $data = Pengajar::latest()->paginate(env('PER_PAGE'));

        return view('back.pengajar.index', compact('data'));
    }
    //== Create ==//
    public function create()
    {
        $kategori = Kategori_Pengajar::all();

        return view('back.pengajar.create', compact('kategori'));
    }   
    //== Store ==//
    public function store(Request $request)
    {
        $request->validate([
            'nama'       =>  'required',
            'keterangan' =>  'required|min:10',
            'foto'       =>  'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $image    = $request->file('foto');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img/pengajar_img'), $new_name);
        $form_data = array(
            'nama'        =>   $request->nama,
            'kategori_id' =>   $request->kategori_id,
            'slug'        =>   str_slug($request->nama), 
            'keterangan'  =>   $request->keterangan,
            'foto'        =>   $new_name
        );

        if (Pengajar::create($form_data)) {
            return redirect('dashboard/pengajar')->with('create', 'Data Berhasil Di Upload');
        }
    }
    //== Tampil ==//
    public function show($id)
    {
        $data = Pengajar::findOrFail($id);
        return view('back.pengajar.show', compact('data'));
    }
    //== Edit ==//
    public function edit($id)
    {
        $kategori = Kategori_Pengajar::all();
        $data = Pengajar::findOrFail($id);

        return view('back.pengajar.edit', compact('data', 'kategori'));
    }
    //== Update ==//
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image      = $request->file('foto');
        if($image  != '')
        {
            $request->validate([
                'nama'         =>  'required',
                'keterangan'   =>  'required|min:10',
                'foto'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/pengajar_img'), $image_name);
        } else
        {
            $request->validate([
                'nama'        =>  'required',
                'kategori_id' =>  'required',
                'keterangan'  =>  'required|min:10',
            ]);
        }

        $form_data = array(
            'nama'        =>   $request->nama,
            'kategori_id' =>   $request->kategori_id,
            'slug'        =>   str_slug($request->nama),
            'keterangan'  =>   $request->keterangan,
            'foto'        =>   $image_name
        );
        
        if (Pengajar::whereId($id)->update($form_data)) {
            return redirect('dashboard/pengajar')->with('edit', 'Data Berhasil Di Update');
        }
    }
    //==  Hapus ==//
    public function destroy($id)
    {
        $data = Pengajar::findOrFail($id);

        if ($data->delete()) {
            return redirect('dashboard/pengajar')->with('delete', 'Data Berhasil Di Hapus');
        }
    }
}
