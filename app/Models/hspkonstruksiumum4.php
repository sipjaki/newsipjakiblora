<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hspkonstruksiumum4 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hspdivisi()
    {
        return $this->belongsTo(hspdivisi::class);
    }

    public function hsppaket4()
    {
        return $this->belongsTo(hsppaket4::class);
    }

    public function hspkodepekerjaan4()
    {
        return $this->belongsTo(hspkodepekerjaan4::class);
    }

    public function subhargadiv4()
    {
        return $this->belongsTo(subhargadiv4::class);
    }
    public function subhargadiv4bahan()
    {
        return $this->belongsTo(subhargadiv4bahan::class);
    }
    public function subhargadiv4peralatan()
    {
        return $this->belongsTo(subhargadiv4peralatan::class);
    }

}
