<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class profilpaketkonsultasinontender extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function prosespaketkonsultasinontender()
    {
        return $this->belongsTo(prosespaketkonsultasinontender::class);
    }

    public function profiljenispekerjaan()
    {
        return $this->belongsTo(profiljenispekerjaan::class);
    }

    public function sumberdana()
    {
        return $this->belongsTo(sumberdana::class);
    }
}
