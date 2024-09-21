<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aset extends Model
{
    protected $fillable=[
        'kode',
        'nama',
        'ruangan_id',
    ];
    public function Ruangan()
    {
        return $this->belongsTo('App\Models\Ruangan');
    }
}
