<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perizinan>
 */
class PerizinanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'alamat_praktek' => $this->faker->address(),
            'telepon' => $this->faker->phoneNumber(),
            'status_permohonan' => $this->faker->randomElement(['Operator','Checking Berkas','Dokumen Valid','Dokumen Tidak Valid','Sedang Disurvey','Telah Disurvey','Terbitkan Izin','Tolak Permohonan'])
        ];
    }
}
