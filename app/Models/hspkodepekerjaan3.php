<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hspkodepekerjaan3 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hsppaket3()
    {
        return $this->hasMany(hsppaket3::class);
    }

    public function hspkonstruksiumum3()
    {
        return $this->belongsTo(hspkonstruksiumum3::class);
    }


}
