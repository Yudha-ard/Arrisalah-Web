<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori_Galeri extends Model
{
    protected $table = 'kategori_galeri';

    protected $fillable = ['nama', 'slug'];
}
