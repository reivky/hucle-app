<?php

namespace App\Http\Controllers;

use App\Models\DataPresensi;
use App\Models\Karyawan;
use App\Models\MasterShift;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DataPresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('data-presensi', [
            'title' => 'Data Presensi',
            'data_presensis' => DataPresensi::with(['karyawan', 'master_shift'])->latest()->paginate(10),
            'karyawans' => Karyawan::latest()->get(),
            'master_shifts' => MasterShift::all(),
        ]);
    }

    public function hoursWorked($time_in, $time_out)
    {
        $start = Carbon::createFromFormat('H:i', $time_in);
        $end = Carbon::createFromFormat('H:i', $time_out);
        $difference = $start->diffInHours($end);

        return $difference;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'id_karyawan' => $request->id_karyawan,
            'id_master_shift' => $request->id_master_shift,
            'jam_masuk' => $request->jam_masuk,
            'jam_pulang' => $request->jam_pulang,
            'tanggal' => Carbon::now()->isoFormat('D MMMM Y')
        ];
        if (!$data['id_master_shift'] && !$data['id_karyawan']) {
            return redirect('/data-presensi')->with('failed', 'Gagal, karyawan dan shift belum dipilih');
        } elseif (!$data['id_karyawan']) {
            return redirect('/data-presensi')->with('failed', 'Gagal, karyawan belum dipilih');
        } elseif (!$data['id_master_shift']) {
            return redirect('/data-presensi')->with('failed', 'Gagal, shift belum dipilih');
        } else {
            DataPresensi::create($data);
            return redirect('/data-presensi')->with('success', 'Presensi baru berhasil ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataPresensi  $dataPresensi
     * @return \Illuminate\Http\Response
     */
    public function show(DataPresensi $dataPresensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataPresensi  $dataPresensi
     * @return \Illuminate\Http\Response
     */
    public function edit(DataPresensi $dataPresensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataPresensi  $dataPresensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataPresensi $dataPresensi)
    {
        $data = [
            'id_karyawan' => $request->id_karyawan,
            'id_master_shift' => $request->id_master_shift,
            'jam_masuk' => $request->jam_masuk,
            'jam_pulang' => $request->jam_pulang,
            'tanggal' => date('d M Y')
        ];
        DataPresensi::where('id', $dataPresensi->id)->update($data);
        return redirect('/data-presensi')->with('success', 'Presensi berhasil di-update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataPresensi  $dataPresensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataPresensi $dataPresensi)
    {
        DataPresensi::destroy($dataPresensi->id);
        return redirect('/data-presensi')->with('success', 'Data presensi berhasil dihapus');
    }
}
