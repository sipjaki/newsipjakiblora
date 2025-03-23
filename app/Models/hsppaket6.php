<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hsppaket6 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hspdivisi()
    {
        return $this->hasMany(hspdivisi::class);
    }

    public function hspkodepekerjaan6()
    {
        return $this->belongsTo(hspkodepekerjaan6::class);
    }

    public function hspkonstruksiumum6()
    {
        return $this->hasMany(hspkonstruksiumum6::class);
    }


}
