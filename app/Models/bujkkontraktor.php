<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class bujkkontraktor extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

        public function bujkkontraktorsub()
        {
            return $this->belongsTo(bujkkontraktorsub::class, 'bujkkontraktorsub_id');
        }

        public function asosiasimasjaki()
        {
            return $this->belongsTo(asosiasimasjaki::class, 'asosiasimasjaki_id');
        }

        public function namaasosiasi()
        {
            return $this->belongsTo(daftarasosiasi::class, 'daftarasosiasi_id');
        }

        public function tahunpilihan()
        {
            return $this->belongsTo(tahunpilihan::class);
        }

}
