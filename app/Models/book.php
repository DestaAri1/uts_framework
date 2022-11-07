<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'judul',
        'penerbit',
        'pengarang',
        'year',
        'id_kategori'
    ];

    public function kategori(){
        return $this->belongsTo(categories::class);
    }
}
