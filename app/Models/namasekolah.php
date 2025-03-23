<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class namasekolah extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function skktenagakerjablora()
    {
        return $this->hasMany(skktenagakerjablora::class);
    }

    public function skktenagakerjabloralist()
    {
        return $this->hasMany(skktenagakerjabloralist::class);
    }

    public function allskktenagakerjablora()
    {
        return $this->hasMany(allskktenagakerjablora::class);
    }

}
