<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class surattertibjakonpenyelenggaraan6 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function tertibjakonpenyelenggaraan()
    {
        return $this->hasOne(tertibjakonpenyelenggaraan::class, 'tertibjakonpenyelenggaraan_id');
    }

}
