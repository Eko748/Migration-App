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
        Schema::create('surat_keputusan', function (Blueprint $table) {
            $table->id();
            $table->string('peserta_permohonan_id')->nullable();
            $table->string('user_pembuat_sk_id')->nullable();
            $table->string('file_draft_sk')->nullable();
            $table->string('is_setuju')->nullable();
            $table->text('keterangan_revisi')->nullable();
            $table->string('user_approve_sk_id')->nullable();
            $table->string('file_sk')->nullable();
            $table->string('user_ttd_sk_id')->nullable();
            $table->date('tgl_sk')->nullable();
            $table->string('nomor_sertifikat')->nullable();
            $table->string('nomor_sk')->nullable();
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
        Schema::dropIfExists('surat_keputusan');
    }
};
