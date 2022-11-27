<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\MasterShift::factory()->create([
            'nama' => 'Pagi',
            'jam_masuk' => '08:00',
            'jam_pulang' => '16:00',
        ]);
        \App\Models\MasterShift::factory()->create([
            'nama' => 'Siang',
            'jam_masuk' => '13:00',
            'jam_pulang' => '21:00',
        ]);
        \App\Models\MasterShift::factory()->create([
            'nama' => 'Sore',
            'jam_masuk' => '16:00',
            'jam_pulang' => '00:00',
        ]);
        \App\Models\MasterShift::factory()->create([
            'nama' => 'Malam',
            'jam_masuk' => '00:00',
            'jam_pulang' => '08:00',
        ]);
        \App\Models\Karyawan::factory(5)->create();
        \App\Models\DataPresensi::factory(5)->create();
    }
}
