<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kecamatanblora extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function peralatankonstruksi()
    {
        return $this->hasMany(peralatankonstruksi::class);
    }

    public function tokobangunanblora()
    {
        return $this->hasMany(tokobangunanblora::class);
    }

    public function detailspaketpekerjaan()
    {
        return $this->hasMany(detailspaketpekerjaan::class);
    }

}
