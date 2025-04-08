<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class penyediastatustertibjakon extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function tertibjasakonstruksi()
    {
        return $this->hasMany(tertibjasakonstruksi::class);
    }

    public function tertibjakonpemanfaatan1()
    {
        return $this->hasMany(tertibjakonpemanfaatan::class);
    }

    public function tertibjakonpenyelenggaraan()
    {
        return $this->hasMany(tertibjakonpenyelenggaraan::class);
    }

}
