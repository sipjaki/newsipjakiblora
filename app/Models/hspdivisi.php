<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hspdivisi extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hsppaket()
    {
        return $this->belongsTo(hsppaket::class);
    }

    public function hsppaket2()
    {
        return $this->belongsTo(hsppaket2::class);
    }

    public function hsppaket3()
    {
        return $this->belongsTo(hsppaket3::class);
    }

    public function hsppaket4()
    {
        return $this->belongsTo(hsppaket4::class);
    }

    public function hsppaket5()
    {
        return $this->belongsTo(hsppaket5::class);
    }

    public function hsppaket6()
    {
        return $this->belongsTo(hsppaket6::class);
    }

    public function hsppaket7()
    {
        return $this->belongsTo(hsppaket7::class);
    }

    public function hsppaket8()
    {
        return $this->belongsTo(hsppaket8::class);
    }

    public function hsppaket9()
    {
        return $this->belongsTo(hsppaket9::class);
    }

    public function hspkonstruksiumum()
    {
        return $this->hasMany(hspkonstruksiumum::class);
    }

    public function hspkonstruksiumum2()
    {
        return $this->hasMany(hspkonstruksiumum2::class);
    }

    public function hspkonstruksiumum3()
    {
        return $this->hasMany(hspkonstruksiumum3::class);
    }

    public function hspkonstruksiumum4()
    {
        return $this->hasMany(hspkonstruksiumum4::class);
    }

    public function hspkonstruksiumum5()
    {
        return $this->hasMany(hspkonstruksiumum5::class);
    }

    public function hspkonstruksiumum6()
    {
        return $this->hasMany(hspkonstruksiumum6::class);
    }

    public function hspkonstruksiumum7()
    {
        return $this->hasMany(hspkonstruksiumum7::class);
    }

    public function hspkonstruksiumum8()
    {
        return $this->hasMany(hspkonstruksiumum8::class);
    }

    public function hspkonstruksiumum9()
    {
        return $this->hasMany(hspkonstruksiumum9::class);
    }


}
