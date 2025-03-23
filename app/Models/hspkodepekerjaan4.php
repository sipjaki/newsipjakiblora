<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hspkodepekerjaan4 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hsppaket4()
    {
        return $this->hasMany(hsppaket4::class);
    }

    public function hspkonstruksiumum4()
    {
        return $this->belongsTo(hspkonstruksiumum4::class);
    }


}
