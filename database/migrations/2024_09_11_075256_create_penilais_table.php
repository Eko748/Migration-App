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
        Schema::create('penilai', function (Blueprint $table) {
            $table->id();
            $table->string('no_sert')->nullable();
            $table->string('nama')->nullable();
            $table->tinyInteger('aktif')->nullable();
            $table->tinyText('tempat_lahir')->nullable();
            $table->tinyText('alamat')->nullable();
            $table->string('email')->nullable();
            $table->string('nip')->nullable();
            $table->string('nik')->nullable();
            $table->tinyText('instansi')->nullable();
            $table->string('no_reg_kompetensi')->nullable();
            $table->string('kode_andalalin')->nullable();
            $table->string('no_provinsi')->nullable();
            $table->tinyText('provinsi')->nullable();
            $table->string('no_kab_kota')->nullable();
            $table->tinyText('kab_kota')->nullable();
            $table->string('kode_daerah')->nullable();
            $table->string('urutan_sertifikat')->nullable();
            $table->string('angkatan')->nullable();
            $table->string('urutan')->nullable();
            $table->string('tanggal_dikeluarkan')->nullable();
            $table->string('no_sertifikat')->nullable();
            $table->string('no_registrasi')->nullable();
            $table->tinyText('sket')->nullable();
            $table->tinyText('draft')->nullable();
            $table->tinyText('file')->nullable();
            $table->tinyText('file_sk_rekomendasi')->nullable();
            $table->char('user_id', 50)->nullable();
            $table->timestamp('stamp')->nullable();
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
        Schema::dropIfExists('penilai');
    }
};
