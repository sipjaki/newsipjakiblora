<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hsppaket9 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hspdivisi()
    {
        return $this->hasMany(hspdivisi::class);
    }

    public function hspkodepekerjaan9()
    {
        return $this->belongsTo(hspkodepekerjaan9::class);
    }

    public function hspkonstruksiumum9()
    {
        return $this->hasMany(hspkonstruksiumum9::class);
    }


}
