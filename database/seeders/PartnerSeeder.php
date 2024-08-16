<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PartnerSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'image' => null,
                'title' => 'Hotel Al-Faisaliah',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => null,
                'title' => 'Hilton Makkah Convention Hotel',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => null,
                'title' => 'Hotel Pullman Zamzam Makkah',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => null,
                'title' => 'Swissotel Makkah',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => null,
                'title' => 'Saudi Arabian Airlines',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => null,
                'title' => 'Emirates Airlines',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => null,
                'title' => 'Qatar Airways',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => null,
                'title' => 'Turkish Airlines',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        Partner::insert($data);
    }
}
