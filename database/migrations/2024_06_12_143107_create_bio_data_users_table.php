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
            $table->dateTime("tanggal_lahir");
            $table->string("pendidikan_tertinggi");
            $table->string("jabatan");
            $table->string("pangkat/gol");
            $table->string("tmt_pangkat");
            $table->string("penata_humas");
            $table->string("tmt_ph");
            $table->string("instansi");
            $table->string("satuan_kerja");
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
