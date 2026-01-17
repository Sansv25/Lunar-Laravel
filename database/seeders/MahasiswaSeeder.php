<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        // Generate 100 data mahasiswa otomatis pakai factory
        Mahasiswa::factory()->count(1000)->create();
    }
}