<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModulKursus extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_kursus',
        'modul',
        'submodul',
        'filemodul'
    ];

    protected $casts = [
        'filemodul' => 'array',
    ];

    public function kursus(){
        return $this->belongsTo(Kursus::class, 'id_kursus', 'id');
    }
}
