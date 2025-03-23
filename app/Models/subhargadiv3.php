<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class subhargadiv3 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hspkonstruksiumum3()
    {
        return $this->hasMany(hspkonstruksiumum3::class, 'hspkonstruksiumum3_id', 'id');
    }

}
