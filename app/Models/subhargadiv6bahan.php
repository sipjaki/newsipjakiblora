<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class subhargadiv6bahan extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hspkonstruksiumum6()
    {
        return $this->hasMany(hspkonstruksiumum6::class, 'hspkonstruksiumum6_id', 'id');
    }

}
