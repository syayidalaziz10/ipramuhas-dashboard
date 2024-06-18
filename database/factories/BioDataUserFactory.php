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
            'tanggal_lahir' => fake()->date(),
            'pendidikan_tertinggi' => fake()->randomElement(['SMA', 'D3', 'D4/S1', 'S2', 'S3']),
            'jabatan' => fake()->randomElement(['Pranata Humas Ahli Madya', 'Prana Humas Ahli Muda', 'Pranata Humas Ahli Pertama', 'Pranata Humas Penyelia', 'Pranata Humas Pelaksana Lanjut', 'Pranata Humas Pelaksana', 'Pranata Humas Pelaksana Pemula']),
            'pangkat/gol' => fake()->randomElement(['Pembina Utama/IV.e', 'Pembina Utama Madya/IV.d', 'Pembina Utama Muda/IV.c', 'Pembina Tingkat/IV.b', 'Pembina/IV.a', 'Penata Tingkat/III.d', 'Penata/III.c', 'Penata Muda Tingkat I/III.b', 'Penata Muda/III.a', 'Pengatur Tingkat I/II.d', 'Pengatur/II.c', 'Pengatur Muda Tingkat I/II.b', 'Pengatur Muda /II.a', 'Juru Tingkat I/I.d', 'Juru/I.c', 'Juru Muda Tingkat I/I.b', 'Juru Muda I/I.a']),
            'tmt_pangkat' => fake()->date(),
            'penata_humas' => fake()->word(),
            'tmt_ph' => fake()->date(),
            'instansi' => fake()->word(),
            'satuan_kerja' => fake()->word(),
            'keahlian' => fake()->randomElement(['Riset Public Relation', 'Monitoring Media', 'Ajang Khusus Kehumasan', 'Protokoler', 'Moderator', 'Konfersi Pers', 'Penanganan Krisis', 'MC', 'Materi Ringkasan', 'Manajemen Isu dan Opini Publik', 'Public Speaking', 'Publikasi Institusi', 'Juru Bicara', 'Lobby dan Negoisasi', 'Community Relations', 'Opini atau Artikel', 'Digital Public Relations', 'Goverment Relations', 'Desain Grafis', 'Video Grafis', 'Konten Kreator', 'Social Media Spesialis']),
            'status' => fake()->randomElement(['Aktif', 'Pending'])
        ];
    }
}
