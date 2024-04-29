<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pelanggan',
        'alamat',
        'no_telp',
        'status',
        'deleted',
    ];

    protected $casts = [
        'deleted' => 'boolean',
    ];
}
