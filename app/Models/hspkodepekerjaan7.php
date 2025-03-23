<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hspkodepekerjaan7 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hsppaket7()
    {
        return $this->hasMany(hsppaket7::class);
    }

    public function hspkonstruksiumum7()
    {
        return $this->belongsTo(hspkonstruksiumum7::class);
    }


}
