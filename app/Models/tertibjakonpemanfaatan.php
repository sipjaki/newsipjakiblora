<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tertibjakonpemanfaatan extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function penyediastatustertibjakon()
    {
        return $this->belongsTo(penyediastatustertibjakon::class); // Relasi yang benar
    }

    public function surattertibjakonpemanfaatan1()
    {
        return $this->belongsTo(surattertibjakonpemanfaatan1::class); // Ganti dengan kelas yang sesuai
    }

    // Relasi dengan surattertibjakonpemanfaatan2
    public function surattertibjakonpemanfaatan2()
    {
        return $this->belongsTo(surattertibjakonpemanfaatan2::class);
    }

    // Relasi dengan surattertibjakonpemanfaatan3
    public function surattertibjakonpemanfaatan3()
    {
        return $this->belongsTo(surattertibjakonpemanfaatan3::class);
    }

    // Relasi dengan surattertibjakonpemanfaatan4
    public function surattertibjakonpemanfaatan4()
    {
        return $this->belongsTo(surattertibjakonpemanfaatan4::class);
    }

    public function surattertibjakonpemanfaatan5()
    {
        return $this->belongsTo(surattertibjakonpemanfaatan5::class);
    }
}
