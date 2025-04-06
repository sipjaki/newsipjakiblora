<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class sumberdana extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function paketpekerjaanmasjaki()
    {
        return $this->hasMany(paketpekerjaanmasjaki::class);
    }

    public function detailspaketpekerjaan()
    {
        return $this->hasMany(detailspaketpekerjaan::class);
    }

    public function detailsnamapaketpekerjaan()
    {
        return $this->hasMany(detailsnamapaketpekerjaan::class);
    }



}
