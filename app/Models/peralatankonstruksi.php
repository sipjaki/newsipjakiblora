<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class peralatankonstruksi extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function kecamatanblora()
    {
        return $this->belongsTo(kecamatanblora::class);
    }

    public function alatberat()
    {
        return $this->belongsTo(alatberat::class);
    }

    // public function tertibjakonpemanfaatan()
    // {
    //     return $this->hasMany(tertibjakonpemanfaatan::class);
    // }

    // public function tertibjakonpenyelenggaraan()
    // {
    //     return $this->hasMany(tertibjakonpenyelenggaraan::class);
    // }

}
