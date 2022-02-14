<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori_Alumni extends Model
{
    protected $table = 'kategori_alumni';

    protected $fillable = ['nama', 'slug'];
}
