<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_category_name',
        'status',
        'deleted',
    ];

    protected $casts = [
        'deleted' => 'boolean',
    ];
}
