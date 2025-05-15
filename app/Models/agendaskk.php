<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class agendaskk extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];


    public function allskktenagakerjablora()
    {
        // return $this->belongsTo(allskktenagakerjablora::class, 'allskktenagakerjablora_id');
        return $this->hasMany(allskktenagakerjablora::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function materipelatihanskk()
    {
        return $this->belongsTo(materipelatihanskk::class, 'materipelatihanskk_id');
    }

    public function asosiasimasjaki()
    {
        return $this->belongsTo(asosiasimasjaki::class, 'asosiasimasjaki_id');
    }

    public function jabatankerja()
    {
        return $this->belongsTo(jabatankerja::class, 'jabatankerja_id');
    }

}
