<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pengawasanlokasi extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

     
    public function ketertiban()
    {
        return $this->hasMany(ketertiban::class);
    }

    public function beritaagenda()
    {
        return $this->hasMany(beritaagenda::class);
    }
    
    public function kegiatanjaskon()
    {
        return $this->hasMany(kegiatanjaskon::class);
    }
    
    public function penanggungjawabteknis()
    {
        return $this->hasMany(penanggungjawabteknis::class);
    }
    
    public function tukangterampil()
    {
        return $this->hasMany(tukangterampil::class);
    }
}
