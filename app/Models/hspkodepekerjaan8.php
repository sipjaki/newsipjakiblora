<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hspkodepekerjaan8 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hsppaket8()
    {
        return $this->hasMany(hsppaket8::class);
    }

    public function hspkonstruksiumum8()
    {
        return $this->belongsTo(hspkonstruksiumum8::class);
    }


}
