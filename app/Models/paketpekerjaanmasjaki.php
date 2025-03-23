<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class paketpekerjaanmasjaki extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function prosespaket()
    {
        return $this->belongsTo(prosespaket::class);
    }

    public function profiljenispekerjaan()
    {
        return $this->belongsTo(profiljenispekerjaan::class);
    }

    public function paketstatuspekerjaan()
    {
        return $this->belongsTo(paketstatuspekerjaan::class);
    }

    public function sumberdana()
    {
        return $this->belongsTo(sumberdana::class);
    }

    public function tahunpilihan()
    {
        return $this->belongsTo(tahunpilihan::class);
    }

}
