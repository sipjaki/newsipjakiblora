<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tukangterampil extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function pengawasanlokasi()
    {
        return $this->belongsTo(pengawasanlokasi::class);
    }

    public function keterampilanpekerja()
    {
        return $this->belongsTo(keterampilanpekerja::class);
    }

    public function tahunpilihan()
    {
        return $this->belongsTo(tahunpilihan::class);
    }
}
