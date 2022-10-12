<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        {
            DB::table('semestersatu')->insert([
                'matkul' => 'fisika',
                'hari' => 'slsa',
                'jam' => 2,
                'dosen' => 'ajif'
            ]);
            DB::table('semestersatu')->insert([
                'matkul' => 'kalkulus',
                'hari' => 'rabu',
                'jam' => 3,
                'dosen' => 'joni'
            ]);
            DB::table('semestersatu')->insert([
                'matkul' => 'aljabar',
                'hari' => 'kamis',
                'jam' => 1,
                'dosen' => 'herlawati'
            ]);
            DB::table('semestersatu')->insert([
                'matkul' => 'tes',
                'hari' => 'tes',
                'jam' => 1,
                'dosen' => 'tes'
            ]);
        }
}
