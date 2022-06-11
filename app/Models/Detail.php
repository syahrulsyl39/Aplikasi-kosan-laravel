<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'jeniskosan_id',
        'deskripsi',
        'harga',
        'gamabr',
        'detail_gambar'
    ];

    public function kosan()
    {
        return $this->belongsTo(Kosan::class);
    }
}