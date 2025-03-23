<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hspkodepekerjaan extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hsppaket()
    {
        return $this->hasMany(hsppaket::class);
    }

    public function hspkonstruksiumum()
    {
        return $this->belongsTo(hspkonstruksiumum::class);
    }


}
