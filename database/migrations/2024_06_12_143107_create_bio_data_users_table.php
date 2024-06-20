<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('bio_data_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained('users');
            $table->string("nama_lengkap");
            $table->string("NIP");
            $table->string("tempat_lahir");
            $table->date("tanggal_lahir");
            $table->enum('pendidikan_tertinggi', ['SMA', 'D3', 'D4/S1', 'S2', 'S3']);
            $table->enum('jabatan', ['Pranata Humas Ahli Madya', 'Prana Humas Ahli Muda', 'Pranata Humas Ahli Pertama', 'Pranata Humas Penyelia', 'Pranata Humas Pelaksana Lanjut', 'Pranata Humas Pelaksana', 'Pranata Humas Pelaksana Pemula'])->default('Pranata Humas Ahli Madya');
            $table->enum('pangkat', ['Pembina Utama/IV.e', 'Pembina Utama Madya/IV.d', 'Pembina Utama Muda/IV.c', 'Pembina Tingkat/IV.b', 'Pembina/IV.a', 'Penata Tingkat/III.d', 'Penata/III.c', 'Penata Muda Tingkat I/III.b', 'Penata Muda/III.a', 'Pengatur Tingkat I/II.d', 'Pengatur/II.c', 'Pengatur Muda Tingkat I/II.b', 'Pengatur Muda /II.a', 'Juru Tingkat I/I.d', 'Juru/I.c', 'Juru Muda Tingkat I/I.b', 'Juru Muda I/I.a']);
            $table->date("tmt_pangkat");
            $table->string("penata_humas");
            $table->date("tmt_ph");
            $table->string("instansi");
            $table->string("satuan_kerja");
            $table->enum('keahlian', ['Riset Public Relation', 'Monitoring Media', 'Ajang Khusus Kehumasan', 'Protokoler', 'Moderator', 'Konfersi Pers', 'Penanganan Krisis', 'MC', 'Materi Ringkasan', 'Manajemen Isu dan Opini Publik', 'Public Speaking', 'Publikasi Institusi', 'Juru Bicara', 'Lobby dan Negoisasi', 'Community Relations', 'Opini atau Artikel', 'Digital Public Relations', 'Goverment Relations', 'Desain Grafis', 'Video Grafis', 'Konten Kreator', 'Social Media Spesialis']);
            $table->enum('status', ['Aktif', 'Pending']);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bio_data_users');
    }
};
