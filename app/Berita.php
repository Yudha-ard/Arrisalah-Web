<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';

    protected $fillable = ['kategori_id', 'slug', 'judul', 'gambar', 'konten'];

    public function kategori()
    {
        return $this->belongsTo(Kategori_Berita::class);
    }

}
