<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'file_gambar',
        'warna_dominan',
        'rekomendasi_warna',
        'keterangan',
    ];

    protected $casts = [
        'rekomendasi_warna' => 'array', // otomatis konversi JSON ke array
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
