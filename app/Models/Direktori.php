<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direktori extends Model
{
    protected $fillable=[
        'jenis_id',
        'nama',
        'url',
        'thumbnail',
        'slug',
    ];
    public function Jenis()
    {
        return $this->belongsTo('App\Models\Jenis');
    }
}
