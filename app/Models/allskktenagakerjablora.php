<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class allskktenagakerjablora extends Model
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

    public function tahunpilihan()
    {
        return $this->belongsTo(tahunpilihan::class);
    }

    public function agendaskk()
    {
        return $this->hasMany(agendaskk::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


        public function asosiasimasjaki()
        {
            return $this->hasMany(asosiasimasjaki::class);
        }

        public function jabatankerja()
        {
            return $this->belongsTo(jabatankerja::class);
        }


}
