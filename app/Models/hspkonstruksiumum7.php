<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hspkonstruksiumum7 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hspdivisi()
    {
        return $this->belongsTo(hspdivisi::class);
    }

    public function hsppaket7()
    {
        return $this->belongsTo(hsppaket7::class);
    }

    public function hspkodepekerjaan7()
    {
        return $this->belongsTo(hspkodepekerjaan7::class);
    }

    public function subhargadiv7()
    {
        return $this->belongsTo(subhargadiv7::class);
    }

    public function subhargadiv7bahan()
    {
        return $this->belongsTo(subhargadiv7bahan::class);
    }

    public function subhargadiv7peralatan()
    {
        return $this->belongsTo(subhargadiv7peralatan::class);
    }

}
