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
        Schema::create('sk_final', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('andalalin_id')->nullable();
            $table->foreign('andalalin_id')->references('id')->on('andalalin')->onDelete('cascade');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->string('nomor')->nullable();
            $table->string('permohonan')->nullable();
            $table->string('proyek')->nullable();
            $table->string('file_sk')->nullable();
            $table->string('watermarked_file_sk')->nullable();
            $table->string('status')->nullable();
            $table->string('bptd')->nullable();
            $table->string('module')->nullable();
            $table->string('link')->nullable();
            $table->string('klasifikasi_jalan')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('jenis_andalalin')->nullable();
            $table->string('sub_jenis_andalalin')->nullable();
            $table->string('peruntukan')->nullable();
            $table->string('penyusun')->nullable();
            $table->string('nib_penyusun')->nullable();
            $table->string('nib_pemohon')->nullable();
            $table->timestamp('stamp')->nullable();
            $table->date('tgl_pengajuan')->nullable();
            $table->string('klasifikasi')->nullable();
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
        Schema::dropIfExists('sk_final');
    }
};