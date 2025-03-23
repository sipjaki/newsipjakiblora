<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hspkodepekerjaan2 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hsppaket2()
    {
        return $this->hasMany(hsppaket2::class);
    }

    public function hspkonstruksiumum2()
    {
        return $this->belongsTo(hspkonstruksiumum2::class);
    }


}
