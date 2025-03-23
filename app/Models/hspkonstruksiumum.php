<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hspkonstruksiumum extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hspdivisi()
    {
        return $this->belongsTo(hspdivisi::class);
    }

    public function hsppaket()
    {
        return $this->belongsTo(hsppaket::class);
    }

    public function hspkodepekerjaan()
    {
        return $this->belongsTo(hspkodepekerjaan::class);
    }

    public function subhargadiv1()
    {
        return $this->belongsTo(subhargadiv1::class);
    }

    public function subhargadiv1bahan()
    {
        return $this->belongsTo(subhargadiv1bahan::class);
    }

    public function subhargadiv1peralatan()
    {
        return $this->belongsTo(subhargadiv1peralatan::class);
    }

}
