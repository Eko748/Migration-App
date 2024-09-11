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
        Schema::create('tim_penilai', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('nip')->nullable();
            $table->string('nik')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->text('alamat')->nullable();
            $table->string('email')->nullable();
            $table->string('nama_instansi')->nullable();
            $table->string('no_sertifikasi')->nullable();
            $table->text('file_sertifikasi')->nullable();
            $table->text('file_sk_rekomendasi')->nullable();
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
        Schema::dropIfExists('tim_penilai');
    }
};
