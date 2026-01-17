<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nim' => $this->faker->unique()->numerify('########'),
            'nama' => $this->faker->name(),
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->date(),
            'fakultas' => $this->faker->randomElement(['Kedokteran', 'FMIPA', 'Ekonomi', 'FASILKOM']),
            'jurusan' => $this->faker->randomElement(['Kedokteran Gigi', 'Kimia', 'Akuntansi', 'Manajemen', 'Ilmu Komputer']),
            'ipk' => $this->faker->randomFloat(2, 2.00, 4.00),
        ];
    }
}