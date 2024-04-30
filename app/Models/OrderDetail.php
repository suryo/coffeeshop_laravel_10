<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomerorder',
        'idproduct',
        'hargaproduk',
        'qty',
        'subtotalproduk',
        'note',
        'review',
        'rating',
        'status',
        'deleted',
    ];

    protected $casts = [
        'deleted' => 'boolean',
    ];

    // Relationship with Product model
    public function product()
    {
        return $this->belongsTo(Product::class, 'idproduct');
    }
}
