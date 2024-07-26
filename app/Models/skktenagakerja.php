<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class skktenagakerja extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'kecamatan', 'desa', 'nama', 'alamat', 'tanggal_lahir', 'nik', 
        'keterampilan', 'tahun_bimtek', 'kualifikasi', 'registrasi', 'usia'
    ];
}
