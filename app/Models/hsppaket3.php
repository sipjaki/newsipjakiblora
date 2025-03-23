<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hsppaket3 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hspdivisi()
    {
        return $this->hasMany(hspdivisi::class);
    }

    public function hspkodepekerjaan3()
    {
        return $this->belongsTo(hspkodepekerjaan3::class);
    }

    public function hspkonstruksiumum3()
    {
        return $this->hasMany(hspkonstruksiumum3::class);
    }


}
