<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class surattertibjakonpemanfaatan3 extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

      public function tertibjakonpemanfaatan()
{
    return $this->hasMany(tertibjakonpemanfaatan::class, 'tertibjakonpemanfaatan_id')->oldest();
}


}
