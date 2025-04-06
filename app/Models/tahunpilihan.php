<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tahunpilihan extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function bujkkontraktor()
    {
        return $this->hasMany(bujkkontraktor::class);
    }

    public function bujkkonsultan()
    {
        return $this->hasMany(bujkkonsultan::class);
    }

    public function allskktenagakerjablora()
    {
        return $this->hasMany(allskktenagakerjablora::class);
    }

    public function paketpekerjaanmasjaki()
    {
        return $this->hasMany(paketpekerjaanmasjaki::class);
    }

    public function detailspaketpekerjaan()
    {
        return $this->hasMany(detailspaketpekerjaan::class);
    }


}
