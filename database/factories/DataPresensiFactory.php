<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataPresensi>
 */
class DataPresensiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_karyawan' => mt_rand(1, 5),
            'id_master_shift' => mt_rand(1, 4),
            'jam_masuk' => '08:00',
            'jam_pulang' => '09:00',
            'tanggal' => Carbon::now()->isoFormat('D MMMM Y')
        ];
    }
}
