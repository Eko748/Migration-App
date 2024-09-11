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
        Schema::create('vw_etl_fact_penilai_sk_rekomendasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sk_rekomendasi_id')->nullable();
            $table->unsignedBigInteger('tim_penilai_id')->nullable();
            $table->string('penilai_nip')->nullable();
            $table->string('penilai_nik')->nullable();
            $table->string('penilai_nama_lengkap')->nullable();
            $table->text('penilai_alamat')->nullable();
            $table->string('penilai_email')->nullable();
            $table->string('penilai_nama_instansi')->nullable();
            $table->string('penilai_no_sertifikasi')->nullable();
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
        Schema::dropIfExists('vw_etl_fact_penilai_sk_rekomendasi');
    }
};
