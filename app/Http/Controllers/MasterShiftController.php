<?php

namespace App\Http\Controllers;

use App\Models\MasterShift;
use Illuminate\Http\Request;

class MasterShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master-shift', [
            'title' => 'Master Shift',
            'master_shifts' => MasterShift::paginate(10)
        ]);
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
            'nama' => $request->shift,
            'jam_masuk' => $request->jam_masuk,
            'jam_pulang' => $request->jam_pulang,
        ];
        MasterShift::create($data);
        return redirect('/master-shift')->with('success', 'Shift baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MasterShift  $masterShift
     * @return \Illuminate\Http\Response
     */
    public function show(MasterShift $masterShift)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MasterShift  $masterShift
     * @return \Illuminate\Http\Response
     */
    public function edit(MasterShift $masterShift)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MasterShift  $masterShift
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MasterShift $masterShift)
    {
        $data = [
            'nama' => $request->shift,
            'jam_masuk' => $request->jam_masuk,
            'jam_pulang' => $request->jam_pulang,
        ];
        MasterShift::where('id', $masterShift->id)->update($data);
        return redirect('/master-shift')->with('success', 'Data Shift berhasil di-update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MasterShift  $masterShift
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterShift $masterShift)
    {
        MasterShift::destroy($masterShift->id);
        return redirect('/master-shift')->with('success', 'Data Shift berhasil dihapus');
    }
}
