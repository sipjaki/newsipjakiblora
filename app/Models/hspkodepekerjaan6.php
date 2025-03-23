<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hspkodepekerjaan6 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hsppaket6()
    {
        return $this->hasMany(hsppaket6::class);
    }

    public function hspkonstruksiumum6()
    {
        return $this->belongsTo(hspkonstruksiumum6::class);
    }


}
