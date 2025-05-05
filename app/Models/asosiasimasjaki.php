<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class asosiasimasjaki extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function skktenagakerjablora()
    {
        return $this->hasMany(skktenagakerjablora::class);
    }

    public function bujkkontraktor()
    {
        return $this->hasMany(bujkkontraktor::class);
    }

    public function bujkkonsultan()
    {
        return $this->hasMany(bujkkonsultan::class);
    }

    public function agendapelatihan()
    {
        return $this->hasMany(agendapelatihan::class);
    }

    public function agendaskk()
    {
        return $this->hasMany(agendaskk::class);
    }

}
