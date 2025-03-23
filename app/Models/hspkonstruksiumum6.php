<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hspkonstruksiumum6 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hspdivisi()
    {
        return $this->belongsTo(hspdivisi::class);
    }

    public function hsppaket6()
    {
        return $this->belongsTo(hsppaket6::class);
    }

    public function hspkodepekerjaan6()
    {
        return $this->belongsTo(hspkodepekerjaan6::class);
    }

    public function subhargadiv6()
    {
        return $this->belongsTo(subhargadiv6::class);
    }

    public function subhargadiv6bahan()
    {
        return $this->belongsTo(subhargadiv6bahan::class);
    }

    public function subhargadiv6peralatan()
    {
        return $this->belongsTo(subhargadiv6peralatan::class);
    }

}
