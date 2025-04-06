<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class detailspaketpekerjaan extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function paketpekerjaanmasjaki()
    {
        return $this->hasOne(paketpekerjaanmasjaki::class);
    }

    public function kecamatanblora()
    {
        return $this->belongsTo(kecamatanblora::class);
    }

    public function tahunpilihan()
    {
        return $this->belongsTo(tahunpilihan::class);
    }

    public function sumberdana()
    {
        return $this->belongsTo(sumberdana::class);
    }

}
