<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class surattertibjakonusaha1 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function tertibjasakonstruksi()
    {
        return $this->hasOne(tertibjasakonstruksi::class, 'tertibjasakonstruksi_id');
    }

    public function tandatangan()
    {
        return $this->belongsTo(tandatangan::class, 'tandatangan_id');
    }

    public function subklasifikasi()
    {
        return $this->belongsTo(subklasifikasi::class, 'subklasifikasi_id');
    }

}
