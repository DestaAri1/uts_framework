<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama_kategori',
        'id_user'
    ];

    public function book(){
        return $this->hasMany(book::class);
    }
}
