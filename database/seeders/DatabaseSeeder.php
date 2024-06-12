<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\BioDataUser::factory(10)->create();



        $user = \App\Models\User::create([
            'name' => 'dimas12',
            'email' => 'dimas@gmail.com',
            'email_verified_at' => now(),
            'password' => 'dimas12',
            'level' => 'Admin',
            'remember_token' => Str::random(10),
        ]);

        \App\Models\BioDataUser::create([
            'user_id' => $user->id,
            'nama_lengkap' => 'Dimas Dliyaur Rahman',
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
        ]);
    }
}
