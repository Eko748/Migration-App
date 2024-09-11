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
        Schema::create('berkas_permohonan', function (Blueprint $table) {
            $table->id();
            $table->string('organizer_id')->nullable();
            $table->string('peserta_permohonan_id')->nullable();
            $table->string('berkas_id')->nullable();
            $table->longText('nama')->nullable();
            $table->longText('input_berkas')->nullable();
            $table->string('file_berkas')->nullable();
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
        Schema::dropIfExists('berkas_permohonan');
    }
};
