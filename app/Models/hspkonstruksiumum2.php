<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hspkonstruksiumum2 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hspdivisi()
    {
        return $this->belongsTo(hspdivisi::class);
    }

    public function hsppaket2()
    {
        return $this->belongsTo(hsppaket2::class);
    }

    public function hspkodepekerjaan2()
    {
        return $this->belongsTo(hspkodepekerjaan2::class);
    }

    public function subhargadiv2()
    {
        return $this->belongsTo(subhargadiv2::class);
    }

    public function subhargadiv2bahan()
    {
        return $this->belongsTo(subhargadiv2bahan::class);
    }

    public function subhargadiv2peralatan()
    {
        return $this->belongsTo(subhargadiv2peralatan::class);
    }

}
