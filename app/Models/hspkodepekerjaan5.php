<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hspkodepekerjaan5 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hsppaket5()
    {
        return $this->hasMany(hsppaket5::class);
    }

    public function hspkonstruksiumum5()
    {
        return $this->belongsTo(hspkonstruksiumum5::class);
    }


}
