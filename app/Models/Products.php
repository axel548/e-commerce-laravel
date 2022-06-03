<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'price',
        'name',
        'description',
        'thumbnail',
        'image',
        'category',
        'stock',
        'weight',
    ];
}
