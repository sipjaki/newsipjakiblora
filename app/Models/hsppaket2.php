<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hsppaket2 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hspdivisi()
    {
        return $this->hasMany(hspdivisi::class);
    }

    public function hspkodepekerjaan2()
    {
        return $this->belongsTo(hspkodepekerjaan2::class);
    }

    public function hspkonstruksiumum2()
    {
        return $this->hasMany(hspkonstruksiumum2::class);
    }


}
