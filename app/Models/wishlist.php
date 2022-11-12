<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_buku',
        'pengarang',
        'tgl',
        'sinopsis',
        'harga',
        'user_id'
    ];
}
