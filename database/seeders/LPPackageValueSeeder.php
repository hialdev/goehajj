<?php

namespace Database\Seeders;

use App\Models\LpPkgValue;
use App\Models\PkgValue;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LPPackageValueSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'iconify_id' => 'ph:seat-fill',
                'title' => 'Seat 200 Pax',
            ],
            [
                'iconify_id' => 'mingcute:time-fill',
                'title' => 'Durasi 25 Hari',
            ],
            [
                'iconify_id' => 'clarity:plane-solid',
                'title' => 'Berangkat dari Jakarta',
            ],
            [
                'iconify_id' => 'hugeicons:haji',
                'title' => 'Free Umroh',
            ],
            [
                'iconify_id' => 'ri:hotel-fill',
                'title' => 'Hotel 5',
            ],
        ];

        LpPkgValue::insert($data);
    }
}
