<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hsppaket5 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hspdivisi()
    {
        return $this->hasMany(hspdivisi::class);
    }

    public function hspkodepekerjaan5()
    {
        return $this->belongsTo(hspkodepekerjaan5::class);
    }

    public function hspkonstruksiumum5()
    {
        return $this->hasMany(hspkonstruksiumum5::class);
    }


}
