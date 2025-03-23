<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class subhargadiv5peralatan extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hspkonstruksiumum5()
    {
        return $this->hasMany(hspkonstruksiumum5::class, 'hspkonstruksiumum5_id', 'id');
    }

}
