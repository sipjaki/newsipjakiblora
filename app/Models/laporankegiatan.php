<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class laporankegiatan extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function kegiatanjaskon()
    {
        return $this->belongsTo(kegiatanjaskon::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
