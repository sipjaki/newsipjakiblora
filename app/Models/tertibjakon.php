<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tertibjakon extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function statustertibjakon()
    {
        return $this->belongsTo(statustertibjakon::class);
    }

    // public function keterampilanpekerja()
    // {
    //     return $this->belongsTo(keterampilanpekerja::class);
    // }

    // public function tahunpilihan()
    // {
    //     return $this->belongsTo(tahunpilihan::class);
    // }
}
