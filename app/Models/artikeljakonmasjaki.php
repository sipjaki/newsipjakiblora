<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class artikeljakonmasjaki extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function namasekolah()
    {
        return $this->belongsTo(namasekolah::class);
    }

    public function jenjangpendidikan()
    {
        return $this->belongsTo(jenjangpendidikan::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class, 'user_id');
    }

}
