<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'judulKursus',
        'subjudul',
        'deskripsi',
        'instruktur'
    ];

    public function modul(){
        return $this->hasMany(ModulKursus::class);
    }
}
