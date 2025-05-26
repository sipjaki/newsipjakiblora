<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class surattertibjakonusaha4 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

      public function tertibjasakonstruksi()
            {
                return $this->hasOne(tertibjasakonstruksi::class, 'surattertibjakonusaha1_id')->oldest();
            }

}
