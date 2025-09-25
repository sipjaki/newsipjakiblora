<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class dokumentasijakon extends Model
{
     use HasFactory, SoftDeletes, HasApiTokens;

    // protected $guarded = ['id'];

     protected $table = 'dokumentasijakon'; // 👈 tambahkan ini
    protected $fillable = [
        'judul',
        'fotokegiatan1',
        'fotokegiatan2',
        'fotokegiatan3',
        'fotokegiatan4',
        'fotokegiatan5',
        'fotokegiatan6',
        'fotokegiatan7',
        'fotokegiatan8',
        'fotokegiatan9',
        'fotokegiatan10',
        'fotokegiatan11',
        'fotokegiatan12',
    ];
    // protected $table = 'dokumentasijakon';
}
