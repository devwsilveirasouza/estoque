<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'partNumber',
        'description',
        'brand',
        'model',
        'um',
        'category',
        'subCategory',
        'address',
        'minQuantity'    
    ];
}
