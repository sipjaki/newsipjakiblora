<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class penanggungjawabteknis extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

     
    public function ketertiban()
    {
        return $this->hasMany(ketertiban::class);
    }

    public function pengawasanlokasi()
    {
        return $this->belongsTo(pengawasanlokasi::class);
    }
}
