<?php

namespace App\Models;

use App\Models\Karyawan;
use App\Models\MasterShift;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\MasterShiftController;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataPresensi extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'id_karyawan');
    }
    public function master_shift()
    {
        return $this->belongsTo(MasterShift::class, 'id_master_shift');
    }
}
