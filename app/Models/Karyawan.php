<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function data_presensi()
    {
        return $this->belongsTo(DataPresensi::class);
    }
}
