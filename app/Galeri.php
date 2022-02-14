<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeri';

    protected $fillable = ['kategori_id', 'slug', 'judul', 'gambar', 'keterangan'];

    public function kategori()
    {
        return $this->belongsTo(Kategori_Galeri::class);
    }
}
