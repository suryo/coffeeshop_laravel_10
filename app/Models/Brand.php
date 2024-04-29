<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_brand',
        'status',
        'deleted',
    ];

    protected $casts = [
        'deleted' => 'boolean',
    ];
}
