<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Qa extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];


    public function qasebagai()
    {
        return $this->belongsTo(qasebagai::class);
    }

    public function qapertanyaan()
    {
        return $this->belongsTo(qapertanyaan::class);
    }

}

