<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class subhargadiv1bahan extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hspkonstruksiumum()
    {
        return $this->hasMany(hspkonstruksiumum::class, 'hspkonstruksiumum_id', 'id');
    }

}
