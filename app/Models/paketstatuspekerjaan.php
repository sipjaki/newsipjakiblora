<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class paketstatuspekerjaan extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    /**
     * Relasi ke paket pekerjaan masjaki
     * Nama method: paketpekerjaan (SESUAI dengan withCount di controller)
     */
    public function paketpekerjaan()
    {
        return $this->hasMany(paketpekerjaanmasjaki::class, 'paketstatuspekerjaan_id');
    }
}