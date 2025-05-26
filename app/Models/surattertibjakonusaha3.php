<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class surattertibjakonusaha3 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

      public function tertibjasakonstruksi()
            {
                return $this->hasOne(tertibjasakonstruksi::class, 'surattertibjakonusaha3_id')->oldest();
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

    public function subklasifikasi()
    {
        return $this->belongsTo(subklasifikasi::class, 'subklasifikasi_id');
    }

}
