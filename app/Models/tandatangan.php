<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tandatangan extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function surattertibjakonusaha1()
    {
        return $this->hasMany(surattertibjakonusaha1::class);
    }

    public function surattertibjakonusaha2()
    {
        return $this->hasMany(surattertibjakonusaha2::class);
    }

    public function surattertibjakonusaha3()
    {
        return $this->hasMany(surattertibjakonusaha3::class);
    }

    public function surattertibjakonusaha4()
    {
        return $this->hasMany(surattertibjakonusaha4::class);
    }

    public function surattertibjakonpemanfaatan1()
    {
        return $this->hasMany(surattertibjakonpemanfaatan1::class);
    }

    public function surattertibjakonpenyelenggaraan1()
    {
        return $this->hasMany(surattertibjakonpenyelenggaraan1::class);
    }

    public function surattertibjakonpenyelenggaraan2()
    {
        return $this->hasMany(surattertibjakonpenyelenggaraan2::class);
    }

    public function surattertibjakonpenyelenggaraan3()
    {
        return $this->hasMany(surattertibjakonpenyelenggaraan3::class);
    }

    public function surattertibjakonpenyelenggaraan4()
    {
        return $this->hasMany(surattertibjakonpenyelenggaraan4::class);
    }

    public function surattertibjakonpenyelenggaraan5()
    {
        return $this->hasMany(surattertibjakonpenyelenggaraan5::class);
    }

    public function surattertibjakonpenyelenggaraan6()
    {
        return $this->hasMany(surattertibjakonpenyelenggaraan6::class);
    }


}
