<?php

namespace Database\Seeders;

use App\Models\FAQ;
use Illuminate\Database\Seeder;

class FAQSeeder extends Seeder
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
                'ask' => 'Apa saja persyaratan untuk mendaftar haji?',
                'answer' => 'Persyaratan untuk mendaftar haji antara lain: memiliki paspor yang masih berlaku, sertifikat kesehatan, surat rekomendasi dari KBIH (Kelompok Bimbingan Ibadah Haji) jika ada, dan pembayaran setoran awal BPIH (Biaya Penyelenggaraan Ibadah Haji).',
            ],
            [
                'ask' => 'Berapa lama durasi perjalanan umroh?',
                'answer' => 'Durasi perjalanan umroh biasanya berkisar antara 9 hingga 12 hari tergantung paket yang dipilih. Durasi ini mencakup perjalanan ke Mekkah dan Madinah serta kegiatan ibadah dan ziarah.',
            ],
            [
                'ask' => 'Apakah biaya umroh sudah termasuk tiket pesawat?',
                'answer' => 'Ya, biaya umroh biasanya sudah termasuk tiket pesawat pulang-pergi, akomodasi hotel, transportasi selama di Arab Saudi, dan beberapa kali makan per hari. Namun, pastikan untuk memeriksa detail paket yang Anda pilih untuk mengetahui cakupan biaya secara lengkap.',
            ],
            [
                'ask' => 'Kapan waktu terbaik untuk melaksanakan umroh?',
                'answer' => 'Waktu terbaik untuk melaksanakan umroh adalah di luar bulan Ramadan dan musim haji, yaitu antara bulan Muharram hingga Syaban. Pada periode ini, biasanya jumlah jamaah lebih sedikit dan cuaca lebih bersahabat.',
            ],
            [
                'ask' => 'Apakah ada batasan usia untuk melaksanakan haji atau umroh?',
                'answer' => 'Tidak ada batasan usia resmi untuk melaksanakan haji atau umroh. Namun, calon jamaah harus dalam kondisi sehat dan mampu melaksanakan ibadah secara mandiri. Jamaah yang berusia lanjut atau memiliki kondisi kesehatan khusus disarankan untuk bepergian dengan pendamping.',
            ],
        ];

        FAQ::insert($data);
    }
}
