<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hspkonstruksiumum8 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hspdivisi()
    {
        return $this->belongsTo(hspdivisi::class);
    }

    public function hsppaket8()
    {
        return $this->belongsTo(hsppaket8::class);
    }

    public function hspkodepekerjaan8()
    {
        return $this->belongsTo(hspkodepekerjaan8::class);
    }

    public function subhargadiv8bahan()
    {
        return $this->belongsTo(subhargadiv8bahan::class);
    }

    public function subhargadiv8peralatan()
    {
        return $this->belongsTo(subhargadiv8peralatan::class);
    }

}
