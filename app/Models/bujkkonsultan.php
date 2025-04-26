<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class bujkkonsultan extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function bujkkonsultansub()
    {
        return $this->belongsTo(bujkkonsultansub::class);
    }

    public function asosiasimasjaki()
    {
        return $this->belongsTo(asosiasimasjaki::class);
    }


    public function tahunpilihan()
    {
        return $this->belongsTo(tahunpilihan::class);
    }

    public function user()
        {
            return $this->belongsTo(User::class);
        }


}
