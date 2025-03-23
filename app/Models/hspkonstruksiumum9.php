<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hspkonstruksiumum9 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hspdivisi()
    {
        return $this->belongsTo(hspdivisi::class);
    }

    public function hsppaket9()
    {
        return $this->belongsTo(hsppaket9::class);
    }

    public function hspkodepekerjaan9()
    {
        return $this->belongsTo(hspkodepekerjaan9::class);
    }

    public function subhargadiv9()
    {
        return $this->belongsTo(subhargadiv9::class);
    }
    public function subhargadiv9bahan()
    {
        return $this->belongsTo(subhargadiv9bahan::class);
    }
    public function subhargadiv9peralatan()
    {
        return $this->belongsTo(subhargadiv9peralatan::class);
    }

}
