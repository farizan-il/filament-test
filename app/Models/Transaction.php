<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'payment_id',
        'namaPelanggan',
        'emailPelanggan',
        'kursus_id',
        'namaKursus',
        'kategoriKursus',
        'harga',
        'buktitransaksi',
        'status'
    ];

    public function userCredentials()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id', 'id');
    }

    public function kegiatan()
    {
        return $this->belongsTo(Kursus::class, 'kursus_id', 'id');
    }
}
