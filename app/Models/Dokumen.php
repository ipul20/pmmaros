<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    protected $fillable = [
        'nama',
        'dokumen',
        'kategori_id',
    ];
    public function Kategori()
    {
        return $this->belongsTo('App\Models\Kategori');
    }
}
