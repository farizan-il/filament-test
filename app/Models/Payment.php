<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'namaPayment',
        'icon',
        'noRef',
        'refNama'
    ];
    public function transaksi()
    {
        return $this->hasMany(Transaction::class, 'payment_id', 'id');
    }
}
