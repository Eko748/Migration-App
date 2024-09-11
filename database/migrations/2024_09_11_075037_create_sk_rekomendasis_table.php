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
        Schema::create('sk_rekomendasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('perusahaan_id')->nullable();
            $table->foreign('perusahaan_id')->references('id')->on('perusahaan')->onDelete('cascade');
            $table->unsignedBigInteger('bptd_id')->nullable();
            $table->foreign('bptd_id')->references('id')->on('bptd')->onDelete('cascade');
            $table->unsignedBigInteger('provinsi_id')->nullable();
            $table->foreign('provinsi_id')->references('id')->on('provinsi')->onDelete('cascade');
            $table->unsignedBigInteger('kabupaten_kota_id')->nullable();
            $table->foreign('kabupaten_kota_id')->references('id')->on('kabupaten_kota')->onDelete('cascade');
            $table->unsignedBigInteger('jenis_andalalin_id')->nullable();
            $table->foreign('jenis_andalalin_id')->references('id')->on('jenis_andalalin')->onDelete('cascade');
            $table->unsignedBigInteger('sub_jenis_andalalin_id')->nullable();
            $table->foreign('sub_jenis_andalalin_id')->references('id')->on('sub_jenis_andalalin')->onDelete('cascade');
            $table->unsignedBigInteger('penyusun_id')->nullable();
            $table->foreign('penyusun_id')->references('id')->on('penyusun')->onDelete('cascade');
            $table->unsignedBigInteger('peruntukan_id')->nullable();
            $table->foreign('peruntukan_id')->references('id')->on('peruntukan')->onDelete('cascade');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->string('bptd')->nullable();
            $table->string('no_sk_rekomendasi')->nullable();
            $table->date('tgl_pengesahan')->nullable();
            $table->string('no_permohonan')->nullable();
            $table->date('tgl_permohonan')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->text('file_sk_rekomendasi')->nullable();
            $table->text('judul')->nullable();
            $table->string('lokasi_pembangunan')->nullable();
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('sk_rekomendasi');
    }
};