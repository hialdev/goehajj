<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'iconify_id' => 'mdi:passport', // Contoh iconify_id
                'title' => 'Kuota Resmi Arab Saudi',
                'desc' => 'Go Ehajj menyediakan kuota resmi dari Arab Saudi untuk keberangkatan haji Anda, memastikan keamanan dan legalitas perjalanan.',
            ],
            [
                'iconify_id' => 'fluent:clock-12-filled',
                'title' => 'Keberangkatan Cepat',
                'desc' => 'Dengan Go Ehajj, Anda bisa berangkat haji lebih cepat tanpa harus menunggu bertahun-tahun dalam antrian.',
            ],
            [
                'iconify_id' => 'carbon:security',
                'title' => 'Keamanan Terjamin',
                'desc' => 'Kami menjamin keamanan Anda selama perjalanan dengan fasilitas dan layanan terbaik yang kami tawarkan.',
            ],
        ];

        Value::insert($data);
    }
}
