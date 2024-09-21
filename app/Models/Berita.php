<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = "tbl_berita";
    protected $fillable = [
        'judul',
        'thumbnail',
        'deskripsi',
        'kategori',
        'slug',
        // 'created_by',
    ];
    public function Kategori()
    {
        return $this->belongsTo('App\Models\Kategori');
    }
}
