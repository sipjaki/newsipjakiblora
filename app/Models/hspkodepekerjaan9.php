<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hspkodepekerjaan9 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hsppaket9()
    {
        return $this->hasMany(hsppaket9::class);
    }

    public function hspkonstruksiumum9()
    {
        return $this->belongsTo(hspkonstruksiumum9::class);
    }


}
