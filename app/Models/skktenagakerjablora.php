<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class skktenagakerjablora extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function namasekolah()
    {
        return $this->belongsTo(namasekolah::class);
    }

    public function jenjangpendidikan()
    {
        return $this->belongsTo(jenjangpendidikan::class);
    }

    public function jurusan()
    {
        return $this->belongsTo(jurusan::class);
    }

    public function tahunlulus()
    {
        return $this->belongsTo(tahunlulus::class);
    }

    public function jabatankerja()
    {
        return $this->belongsTo(jabatankerja::class);
    }

    public function jenjang()
    {
        return $this->belongsTo(jenjang::class);
    }

    public function lpspenerbit()
    {
        return $this->belongsTo(lpspenerbit::class);
    }

    public function daftarasosiasi()
    {
        return $this->belongsTo(daftarasosiasi::class, 'daftarasosiasi_id');
    }

}
