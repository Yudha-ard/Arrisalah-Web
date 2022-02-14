<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajar extends Model
{
    protected $table = 'pengajar';
    
    protected $fillable = ['kategori_id', 'slug', 'nama', 'foto', 'keterangan'];

    public function kategori()
    {
        return $this->belongsTo(Kategori_Pengajar::class);
    }
}
