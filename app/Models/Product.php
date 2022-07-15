<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'boarding_type',
        'street_name',
        'price',
        'details'
    ];

    public function galleries()
    {
        // return $this->hasMany(ProductGallery::class, 'products_ud');
    }
}
