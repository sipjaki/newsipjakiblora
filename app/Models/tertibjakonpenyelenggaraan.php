<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tertibjakonpenyelenggaraan extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function penyediastatustertibjakon()
    {
        return $this->belongsTo(penyediastatustertibjakon::class);
    }

    public function informasisurattertibpenyelenggaraan()
    {
        return $this->belongsTo(informasisurattertibpenyelenggaraan::class);
    }

    public function surattertibjakonpenyelenggaraan1()
    {
        return $this->belongsTo(surattertibjakonpenyelenggaraan1::class);
    }

    public function surattertibjakonpenyelenggaraan2()
    {
        return $this->belongsTo(surattertibjakonpenyelenggaraan2::class);
    }

    public function surattertibjakonpenyelenggaraan3()
    {
        return $this->belongsTo(surattertibjakonpenyelenggaraan3::class);
    }

    public function surattertibjakonpenyelenggaraan4()
    {
        return $this->belongsTo(surattertibjakonpenyelenggaraan4::class);
    }

    public function surattertibjakonpenyelenggaraan5()
    {
        return $this->belongsTo(surattertibjakonpenyelenggaraan5::class);
    }

    public function surattertibjakonpenyelenggaraan6()
    {
        return $this->belongsTo(surattertibjakonpenyelenggaraan6::class);
    }

}
