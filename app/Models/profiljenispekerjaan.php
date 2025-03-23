<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class profiljenispekerjaan extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function paketpekerjaanmasjaki()
    {
        return $this->hasMany(paketpekerjaanmasjaki::class);
    }

    // public function profilpaketpekerjaannontender()
    // {
    //     return $this->hasMany(profilpaketpekerjaannontender::class);
    // }

    // public function profilpaketkonsultasi()
    // {
    //     return $this->hasMany(profilpaketkonsultasi::class);
    // }

    // public function profilpaketkonsultasinontender()
    // {
    //     return $this->hasMany(profilpaketkonsultasinontender::class);
    // }
}
