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

    public function bulanrekap()
    {
        return $this->belongsTo(bulanrekap::class);
    }

    // ---------

        public function detailsnamapaketpekerjaan()
        {
            return $this->belongsTo(detailsnamapaketpekerjaan::class);
        }

        public function detailspaketpekerjaan()
        {
            return $this->belongsTo(detailspaketpekerjaan::class);
        }

        public function spk()
        {
            return $this->belongsTo(spk::class);
        }

        public function sppbj()
        {
            return $this->belongsTo(sppbj::class);
        }

        public function sskk()
        {
            return $this->belongsTo(sskk::class);
        }

        public function suratperjanjianpekerjaan()
        {
            return $this->belongsTo(suratperjanjianpekerjaan::class);
        }

        public function user()
        {
            return $this->belongsTo(user::class);
        }

}
