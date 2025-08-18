<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class surattertibjakonpenyelenggaraan5 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function tertibjakonpenyelenggaraan()
    {
        return $this->hasOne(tertibjakonpenyelenggaraan::class, 'tertibjakonpenyelenggaraan_id');
    }

        public function tandatangan1()
    {
        return $this->belongsTo(tandatangan::class, 'tandatangan1_id');
    }

    public function tandatangan2()
    {
        return $this->belongsTo(tandatangan::class, 'tandatangan2_id');
    }

    public function tandatangan3()
    {
        return $this->belongsTo(tandatangan::class, 'tandatangan3_id');
    }

}
