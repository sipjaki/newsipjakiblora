<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class subhargadiv9bahan extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hspkonstruksiumum9()
    {
        return $this->hasMany(hspkonstruksiumum9::class, 'hspkonstruksiumum9_id', 'id');
    }

}
