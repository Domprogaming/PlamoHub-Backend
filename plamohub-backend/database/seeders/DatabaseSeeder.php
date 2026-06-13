<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Menyuruh GunplaSeeder untuk bekerja memasukkan data
        $this->call([
            GunplaSeeder::class,
        ]);
    }
}