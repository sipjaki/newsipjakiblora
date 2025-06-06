<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class subklasifikasi extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function surattertibjakonusaha1()
    {
        return $this->hasMany(surattertibjakonusaha1::class);
    }

    public function surattertibjakonusaha3()
    {
        return $this->hasMany(surattertibjakonusaha3::class);
    }


}
