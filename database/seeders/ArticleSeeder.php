<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'Persiapan Haji yang Perlu Diperhatikan',
                'slug' => 'persiapan-haji-yang-perlu-diperhatikan',
                'image' => null,
                'desc' => 'Panduan lengkap untuk persiapan ibadah haji, mulai dari dokumen yang diperlukan hingga tips kesehatan.',
                'key' => 'persiapan haji, tips haji, dokumen haji',
                'content' => '<p>Haji adalah salah satu rukun Islam yang wajib dilaksanakan oleh umat Muslim yang mampu. Persiapan untuk ibadah haji sangat penting untuk memastikan perjalanan yang lancar dan berkualitas. Beberapa hal yang perlu diperhatikan antara lain adalah mempersiapkan dokumen-dokumen penting seperti paspor dan visa, serta mengikuti vaksinasi yang diperlukan.</p>
                              <p>Selain itu, penting juga untuk menjaga kesehatan dengan melakukan pemeriksaan kesehatan dan mempersiapkan fisik dengan baik. Mengikuti pelatihan haji yang disediakan oleh lembaga terkait bisa membantu jamaah untuk lebih siap dalam menjalani berbagai ritual selama di tanah suci.</p>
                              <p>Selama proses persiapan, pastikan juga untuk memahami jadwal dan tahapan pelaksanaan ibadah haji agar dapat mengikuti seluruh rangkaian ibadah dengan benar.</p>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Keutamaan Umroh di Bulan Ramadhan',
                'slug' => 'keutamaan-umroh-di-bulan-ramadhan',
                'image' => null,
                'desc' => 'Keutamaan dan manfaat melaksanakan umroh di bulan Ramadhan serta perbedaannya dengan umroh di waktu lainnya.',
                'key' => 'keutamaan umroh, umroh Ramadhan, manfaat umroh',
                'content' => '<p>Umroh di bulan Ramadhan memiliki keutamaan dan manfaat tersendiri dibandingkan dengan umroh di bulan-bulan lainnya. Rasulullah SAW bersabda bahwa umroh di bulan Ramadhan setara dengan haji bersama beliau. Ini adalah kesempatan emas bagi umat Muslim untuk mendapatkan pahala yang berlipat ganda.</p>
                              <p>Selama bulan Ramadhan, suasana di Mekkah dan Madinah sangat berbeda. Jamaah umroh dapat merasakan keistimewaan ibadah di bulan suci ini, dengan lebih banyak kegiatan ibadah dan tadarus Al-Qur’an. Peningkatan spiritual ini tentunya memberikan dampak positif bagi setiap individu yang melaksanakannya.</p>
                              <p>Untuk mendapatkan pengalaman terbaik, disarankan untuk merencanakan perjalanan jauh-jauh hari dan memastikan semua persiapan dilakukan dengan baik, termasuk pemilihan paket umroh yang sesuai dengan kebutuhan.</p>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Manfaat dan Tujuan Ibadah Umroh',
                'slug' => 'manfaat-dan-tujuan-ibadah-umroh',
                'image' => null,
                'desc' => 'Penjelasan tentang manfaat dan tujuan melaksanakan ibadah umroh bagi umat Islam.',
                'key' => 'manfaat umroh, tujuan umroh, ibadah umroh',
                'content' => '<p>Umroh adalah ibadah Sunnah yang sangat dianjurkan dalam Islam. Melaksanakan umroh memberikan banyak manfaat baik secara spiritual maupun sosial. Secara spiritual, umroh dapat membersihkan dosa-dosa dan meningkatkan kualitas hubungan dengan Allah SWT.</p>
                              <p>Selain itu, umroh juga menjadi kesempatan untuk mempererat hubungan sosial dengan sesama umat Islam. Selama berada di tanah suci, jamaah umroh berkesempatan untuk bertemu dan berinteraksi dengan Muslim dari berbagai belahan dunia, yang memperluas wawasan dan memperkuat ukhuwah Islamiyah.</p>
                              <p>Tujuan utama dari ibadah umroh adalah untuk memperoleh ridha Allah SWT dan mendapatkan pahala yang berlipat. Ibadah ini juga menjadi bagian dari perjalanan spiritual yang memperdalam keimanan dan ketakwaan seseorang.</p>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Tips Memilih Paket Umroh yang Tepat',
                'slug' => 'tips-memilih-paket-umroh-yang-tepat',
                'image' => null,
                'desc' => 'Panduan dalam memilih paket umroh yang sesuai dengan kebutuhan dan anggaran.',
                'key' => 'tips umroh, memilih paket umroh, paket umroh',
                'content' => '<p>Memilih paket umroh yang tepat sangat penting untuk memastikan perjalanan ibadah yang nyaman dan sesuai dengan harapan. Beberapa hal yang perlu dipertimbangkan termasuk fasilitas yang ditawarkan, jadwal keberangkatan, dan biaya yang dikenakan.</p>
                              <p>Pastikan untuk memilih agen perjalanan yang terpercaya dan memiliki reputasi baik. Cek ulasan dan testimoni dari jamaah sebelumnya untuk mendapatkan gambaran tentang kualitas layanan yang diberikan. Jangan ragu untuk bertanya mengenai detail paket dan fasilitas yang termasuk dalam harga.</p>
                              <p>Selain itu, pertimbangkan juga faktor kenyamanan seperti akomodasi dan transportasi selama di tanah suci. Pilih paket yang menawarkan layanan yang memadai dan sesuai dengan kebutuhan Anda.</p>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Panduan Ibadah Haji untuk Pemula',
                'slug' => 'panduan-ibadah-haji-untuk-pemula',
                'image' => null,
                'desc' => 'Panduan lengkap untuk memulai ibadah haji bagi mereka yang baru pertama kali melaksanakan.',
                'key' => 'panduan haji, ibadah haji, pemula haji',
                'content' => '<p>Melaksanakan ibadah haji untuk pertama kalinya bisa menjadi pengalaman yang menegangkan sekaligus menyenangkan. Penting untuk mempersiapkan diri dengan baik agar dapat menjalani ibadah haji dengan lancar. Mulailah dengan memahami berbagai ritual dan tata cara haji yang harus dilaksanakan.</p>
                              <p>Pelajari juga tentang persyaratan dokumen, vaksinasi, dan peraturan yang berlaku. Ikuti pelatihan dan bimbingan dari lembaga resmi untuk mendapatkan informasi yang akurat dan terbaru mengenai pelaksanaan haji.</p>
                              <p>Selain itu, pastikan untuk menjaga kesehatan dan stamina agar dapat mengikuti seluruh rangkaian ibadah haji dengan baik. Jangan lupa untuk selalu berdoa dan meminta petunjuk dari Allah SWT agar perjalanan ibadah haji Anda berjalan dengan lancar.</p>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Fasilitas Hotel Selama Umroh',
                'slug' => 'fasilitas-hotel-selama-umroh',
                'image' => null,
                'desc' => 'Informasi tentang fasilitas hotel yang biasanya tersedia selama pelaksanaan umroh.',
                'key' => 'fasilitas hotel, umroh, hotel umroh',
                'content' => '<p>Selama melaksanakan umroh, fasilitas hotel yang disediakan menjadi salah satu aspek penting yang perlu diperhatikan. Biasanya, paket umroh mencakup akomodasi di hotel yang terletak dekat dengan Masjidil Haram atau Masjid Nabawi untuk memudahkan jamaah dalam beribadah.</p>
                              <p>Fasilitas yang umumnya tersedia di hotel selama umroh meliputi kamar tidur yang nyaman, akses internet, layanan makan, dan transportasi menuju tempat-tempat ibadah. Beberapa hotel juga menyediakan layanan tambahan seperti fasilitas kesehatan, laundry, dan layanan kamar.</p>
                              <p>Penting untuk memeriksa fasilitas yang ditawarkan dalam paket umroh Anda dan memastikan bahwa hotel yang dipilih memenuhi standar kenyamanan yang Anda inginkan.</p>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Kesehatan Selama Perjalanan Haji',
                'slug' => 'kesehatan-selama-perjalanan-haji',
                'image' => null,
                'desc' => 'Tips menjaga kesehatan selama perjalanan haji agar ibadah dapat dilaksanakan dengan baik.',
                'key' => 'kesehatan haji, tips kesehatan, perjalanan haji',
                'content' => '<p>Menjaga kesehatan selama perjalanan haji sangat penting untuk memastikan Anda dapat menjalani ibadah dengan baik. Beberapa tips kesehatan yang perlu diperhatikan termasuk menjaga kebugaran fisik, mengonsumsi makanan bergizi, dan menjaga hidrasi dengan baik.</p>
                              <p>Jangan lupa untuk membawa obat-obatan pribadi dan perlengkapan medis yang diperlukan. Jika Anda memiliki kondisi kesehatan tertentu, konsultasikan dengan dokter sebelum berangkat untuk memastikan Anda mendapatkan saran yang tepat.</p>
                              <p>Selama di tanah suci, pastikan untuk mengikuti petunjuk kesehatan dan kebersihan yang berlaku, serta menjaga pola makan dan istirahat yang cukup agar dapat melaksanakan ibadah dengan maksimal.</p>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Mengenal Rukun Haji dan Umroh',
                'slug' => 'mengenal-rukun-haji-dan-umroh',
                'image' => null,
                'desc' => 'Penjelasan tentang rukun-rukun yang harus dipenuhi dalam ibadah haji dan umroh.',
                'key' => 'rukun haji, rukun umroh, ibadah haji',
                'content' => '<p>Rukun haji dan umroh adalah bagian-bagian penting yang harus dipenuhi oleh setiap jamaah untuk memastikan ibadah mereka sah. Rukun haji meliputi niat, ihram, wukuf di Arafah, mabit di Muzdalifah, dan pelaksanaan thawaf, sa’i, serta tahallul.</p>
                              <p>Sementara itu, rukun umroh terdiri dari niat, ihram, thawaf, sa’i, dan tahallul. Memahami dan melaksanakan rukun-rukun ini dengan benar adalah kunci untuk ibadah yang sah dan diterima oleh Allah SWT.</p>
                              <p>Selama persiapan, pastikan untuk mempelajari dengan seksama setiap rukun dan tata cara pelaksanaannya, serta mengikuti bimbingan dari pihak yang berkompeten untuk mendapatkan pemahaman yang baik.</p>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        Article::insert($data);
    }
}
