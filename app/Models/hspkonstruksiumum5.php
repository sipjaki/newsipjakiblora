<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hspkonstruksiumum5 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function hspdivisi()
    {
        return $this->belongsTo(hspdivisi::class);
    }

    public function hsppaket5()
    {
        return $this->belongsTo(hsppaket5::class);
    }

    public function hspkodepekerjaan5()
    {
        return $this->belongsTo(hspkodepekerjaan5::class);
    }

    public function subhargadiv5()
    {
        return $this->belongsTo(subhargadiv5::class);
    }
    public function subhargadiv5bahan()
    {
        return $this->belongsTo(subhargadiv5bahan::class);
    }
    public function subhargadiv5peralatan()
    {
        return $this->belongsTo(subhargadiv5peralatan::class);
    }

}
