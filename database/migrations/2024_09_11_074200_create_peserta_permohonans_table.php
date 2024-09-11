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
        Schema::create('peserta_permohonan', function (Blueprint $table) {
            $table->id();
            $table->string('organizer_id')->nullable();
            $table->string('berkas_id')->nullable();
            $table->string('jadwal_sertifikasi_id')->nullable();
            $table->string('nomor_permohonan')->nullable();
            $table->string('jenis_pengajuan', 1)->nullable();
            $table->string('klarifikasi_sertifikasi', 1)->nullable();
            $table->string('is_berkas_lengkap', 1)->nullable();
            $table->string('is_berkas_valid', 1)->nullable();
            $table->string('is_peserta', 1)->nullable();
            $table->string('is_draft', 1)->nullable();
            $table->string('is_selesai', 1)->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('status')->nullable();
            $table->string('is_mail_send', 1)->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta_permohonan');
    }
};
