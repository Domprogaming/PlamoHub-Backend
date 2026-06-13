<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gunpla;

class GunplaSeeder extends Seeder
{
    public function run(): void
    {
        $gunplas = [
            [
                'name' => 'RX-78-2 Gundam', 'grade' => 'EG', 'scale' => '1/144', 'price' => 110000,
                'desc' => 'Entry Grade yang sangat ramah pemula. Tidak butuh nipper.',
                'imageColor' => 'bg-gray-200', 'series' => 'Mobile Suit Gundam',
                'image' => '/images/mg_rx78_gundam_v3_62.jpg' 
            ],
            [
                'name' => 'Gundam Aerial', 'grade' => 'HG', 'scale' => '1/144', 'price' => 230000,
                'desc' => 'High Grade dari seri The Witch from Mercury. Desain modern.',
                'imageColor' => 'bg-blue-100', 'series' => 'The Witch from Mercury',
                'image' => '/images/HG-Gundam-Aerial_0.jpg'
            ],
            [
                'name' => 'RX-178B GUNDAM MK-II', 'grade' => 'RG', 'scale' => '1/144', 'price' => 750000,
                'desc' => 'Real Grade dengan detail super presisi dan inner frame yang kokoh.',
                'imageColor' => 'bg-gray-800', 'series' => 'Zeta Gundam',
                'image' => '/images/mg-rx-178-gundam-mk2-2.jpg'
            ],
            [
                'name' => 'Gundam Barbatos', 'grade' => 'MG', 'scale' => '1/100', 'price' => 850000,
                'desc' => 'Master Grade dengan inner frame Gundam Frame terlengkap.',
                'imageColor' => 'bg-yellow-100', 'series' => 'Iron-Blooded Orphans',
                'image' => '/images/item_0000014284_Ti1gOkD5_101.jpg'
            ],
            [
                'name' => 'Unicorn Gundam', 'grade' => 'PG', 'scale' => '1/60', 'price' => 3500000,
                'desc' => 'Perfect Grade raksasa dengan fitur transformasi penuh.',
                'imageColor' => 'bg-red-50', 'series' => 'Gundam UC',
                'image' => '/images/Gundam-Universe-RX-0-Unicorn-Gundam_0.jpg'
            ],
            [
                'name' => 'Zaku II Char Custom', 'grade' => 'HG', 'scale' => '1/144', 'price' => 260000,
                'desc' => 'Zaku legendaris warna merah milik Char Aznable. Bergerak 3x lebih cepat!',
                'imageColor' => 'bg-red-100', 'series' => 'Mobile Suit Gundam',
                'image' => '/images/7f880f4d52c246bea936a2371a38159a.jpg'
            ],
            [
                'name' => 'Sazabi Ver.Ka', 'grade' => 'MG', 'scale' => '1/100', 'price' => 1400000,
                'desc' => 'Master Grade raksasa yang sangat ikonik dengan detail memukau.',
                'imageColor' => 'bg-red-800', 'series' => 'Chars Counterattack',
                'image' => '/images/sazabi.jpg'
            ],
            [
                'name' => 'Wing Gundam Zero EW', 'grade' => 'MG', 'scale' => '1/100', 'price' => 950000,
                'desc' => 'Versi Ka dari Wing Zero EW dengan sayap malaikat yang megah.',
                'imageColor' => 'bg-blue-50', 'series' => 'Gundam Wing',
                'image' => '/images/mg-rx-178-gundam-mk2-2.jpg'
            ]
        ];

        foreach ($gunplas as $gunpla) {
            Gunpla::create($gunpla);
        }
    }
}