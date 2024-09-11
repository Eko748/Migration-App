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
        Schema::create('penyusun', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->string('no_sert')->nullable();
            $table->tinyInteger('aktif')->nullable();
            $table->string('klasifikasi')->nullable();
            $table->string('nama')->nullable();
            $table->tinyText('tempat_lahir')->nullable();
            $table->tinyText('alamat')->nullable();
            $table->string('email')->nullable();
            $table->string('telepon')->nullable();
            $table->string('password')->nullable();
            $table->string('nip')->nullable();
            $table->string('nik')->nullable();
            $table->tinyText('instansi')->nullable();
            $table->string('no_reg_kompetensi')->nullable();
            $table->string('kode_penyusun')->nullable();
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
            $table->date('exp_sert')->nullable();
            $table->string('no_sertifikat')->nullable();
            $table->string('no_registrasi')->nullable();
            $table->tinyText('sket')->nullable();
            $table->tinyText('draft')->nullable();
            $table->tinyText('file')->nullable();
            $table->tinyText('file_sk_rekomendasi')->nullable();
            $table->string('secret_key')->nullable();
            $table->dateTime('time_secret_key')->nullable();
            $table->timestamp('stamp')->nullable();
            $table->string('is_verified')->nullable();
            $table->string('gambar')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('created_by')->nullable();
            $table->string('deleted_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyusun');
    }
};