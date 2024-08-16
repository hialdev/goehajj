<?php

namespace Database\Seeders;

use App\Models\Proces;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProcessSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'Bio Metrik',
                'desc' => 'Wajib Mengikuti Proses Biometrik VSF Sebelum Visa Dikeluarkan',
                'urutan' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Umroh & Iqomah',
                'desc' => 'Umroh Sebelum Ramadhan dan Kepengurusan Iqomah di Saudi Arabia',
                'urutan' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Tasreh Resmi',
                'desc' => 'Tasreh Resmi Akan Dikeluarkan Sebelum Keberangkatan Biasanya Dimulai Bulan Rajab',
                'urutan' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Manasek Haji',
                'desc' => 'Program Manasek Haji Selama 2 Hari di Jakarta Sebelum Keberangkatan Haji',
                'urutan' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Keberangkatan',
                'desc' => 'Keberangkatan Haji DI Bulan Dulqodah Antara Tanggal 17 - 20 Dulqodah Hingga Proses Haji Selesai Selama 25 Hari',
                'urutan' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        Proces::insert($data);
    }
}
