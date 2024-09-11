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
        Schema::create('penilaian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('peserta_permohonan_id')->nullable();
            $table->foreign('peserta_permohonan_id')->references('id')->on('peserta_permohonan')->onDelete('cascade');
            $table->unsignedBigInteger('bobot_nilai_id')->nullable();
            $table->foreign('bobot_nilai_id')->references('id')->on('bobot_nilai')->onDelete('cascade');
            $table->decimal('bobot_pengetahuan',5,2)->nullable();
            $table->decimal('nilai_eval_pengetahuan',5,2)->nullable();
            $table->decimal('nilai_akhir_pengetahuan',5,2)->nullable();
            $table->decimal('bobot_pengalaman',5,2)->nullable();
            $table->decimal('nilai_eval_pengalaman',5,2)->nullable();
            $table->decimal('nilai_akhir_pengalaman',5,2)->nullable();
            $table->decimal('bobot_perilaku',5,2)->nullable();
            $table->decimal('nilai_eval_perilaku',5,2)->nullable();
            $table->decimal('nilai_akhir_perilaku',5,2)->nullable();
            $table->decimal('nilai_akhir_total',5,2)->nullable();
            $table->decimal('nilai_lulus',5,2)->nullable();
            $table->string('kesimpulan')->nullable();
            $table->string('klasifikasi_sertifikasi')->nullable();
            $table->string('deskripsi')->nullable();
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
        Schema::dropIfExists('penilaian');
    }
};