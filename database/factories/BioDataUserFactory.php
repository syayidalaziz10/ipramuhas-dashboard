<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BioDataUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = \App\Models\User::factory(1)->create()->first()->id;
        return [
            'user_id' => $user,
            'nama_lengkap' => fake()->name('male'),
            'NIP' => fake()->numberBetween(20000000, 40000000),
            'tempat_lahir' => fake()->word(),
            'tanggal_lahir' => fake()->dateTime(),
            'pendidikan_tertinggi' => fake()->word(),
            'jabatan' => fake()->word(),
            'pangkat/gol' => fake()->word(),
            'tmt_pangkat' => fake()->word(),
            'penata_humas' => fake()->word(),
            'tmt_ph' => fake()->word(),
            'instansi' => fake()->word(),
            'satuan_kerja' => fake()->word(),
        ];
    }
}
