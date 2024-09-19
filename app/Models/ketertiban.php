<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ketertiban extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];


    public function penanggungjawabteknis()
    {
        return $this->belongsTo(penanggungjawabteknis::class);
    }

    public function pengawasanbangunangedung()
    {
        return $this->belongsTo(pengawasanbangunangedung::class);
    }

    public function pengawasanlokasi()
    {
        return $this->belongsTo(pengawasanlokasi::class);
    }

    public function pengawasanstatus()
    {
        return $this->belongsTo(pengawasanstatus::class);
    }

    public function pengawasantindakan()
    {
        return $this->belongsTo(pengawasantindakan::class);
    }
}
