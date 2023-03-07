<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;

    public function film()
    {
        return $this->belongsTo(film::class, 'id_booking');
    }

    protected $table = "bookings";
    protected $primaryKey = 'id_booking';
    protected $fillable = [
        'nama',
        'alamat',
        'no_kursi',
        'jam_tayang',
        'id_film',
        'pesan'
    ];
}
