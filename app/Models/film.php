<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    use HasFactory;

    public function bookings()
    {
        return $this->hasMany(booking::class, 'id_film');
    }

    protected $table = "films";
    protected $primaryKey = 'id_film';
    protected $fillable = [
        'judul_film',
        'deskripsi',
        'durasi',
        // 'price',
        'trailer',
        'gambar'
    ];
}
