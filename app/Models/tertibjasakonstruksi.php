<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tertibjasakonstruksi extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function penyediastatustertibjakon()
    {
        return $this->belongsTo(penyediastatustertibjakon::class);
    }

    public function surattertibjakonusaha1()
    {
        return $this->belongsTo(surattertibjakonusaha1::class);
    }

    public function surattertibjakonusaha2()
    {
        return $this->belongsTo(surattertibjakonusaha2::class);
    }

    public function surattertibjakonusaha3()
    {
        return $this->belongsTo(surattertibjakonusaha3::class);
    }

    public function surattertibjakonusaha4()
    {
        return $this->belongsTo(surattertibjakonusaha4::class);
    }

}
