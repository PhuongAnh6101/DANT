<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $tatble = 'products';
    protected $fillable = [
        'name',
        'description',
        'price',
        'price_sale',
        'category_id',
        'active'
    ];
}
