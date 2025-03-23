<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hspkonstruksiumum3 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hspdivisi()
    {
        return $this->belongsTo(hspdivisi::class);
    }

    public function hsppaket3()
    {
        return $this->belongsTo(hsppaket3::class);
    }

    public function hspkodepekerjaan3()
    {
        return $this->belongsTo(hspkodepekerjaan3::class);
    }

    public function subhargadiv3()
    {
        return $this->belongsTo(subhargadiv3::class);
    }
    public function subhargadiv3bahan()
    {
        return $this->belongsTo(subhargadiv3bahan::class);
    }
    public function subhargadiv3peralatan()
    {
        return $this->belongsTo(subhargadiv3peralatan::class);
    }

}
