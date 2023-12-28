<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PerizinanPendirian>
 */
class PerizinanPendirianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 9,
            'nama' => $this->faker->name(),
            'email' => $this->faker->email(),
            'telepon' => $this->faker->phoneNumber(),
            'tipe_dokumen' => $this->faker->randomElement([
                'TK',
                'SD/SMP/SMA'
            ]),
            'status_dokumen' => $this->faker->randomElement([
                'Checking Berkas Operator',
                'Dokumen Valid',
                'Dokumen Tidak Valid',
                'Sedang Disurvey',
                'Telah Disurvey',
                'Checking Berkas Verifikator',
                'Dokumen Sesuai',
                'Dokumen Ditolak',
                'Tanda Tangan Kepala Dinas',
                'Permohonan Selesai',
                ]),
            'latitude' => $this->faker->latitude(),
            'longtitude' => $this->faker->longitude(),
            'lokasi' => $this->faker->address(),
        ];
    }
}
