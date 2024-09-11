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
        Schema::create('andalalin_diskusi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('andalalin_id')->nullable();
            $table->foreign('andalalin_id')->references('id')->on('andalalin')->onDelete('cascade');
            $table->unsignedBigInteger('staf_id')->nullable();
            $table->foreign('staf_id')->references('id')->on('staf')->onDelete('cascade');
            $table->dateTime('tanggal_pertemuan')->nullable();
            $table->text('lokasi')->nullable();
            $table->string('absent_link')->nullable();
            $table->timestamp('batas_absen')->nullable();
            $table->text('ulasan_hasil')->nullable();
            $table->string('no_penerimaan_laporan')->nullable();
            $table->string('file_diskusi')->nullable();
            $table->string('status')->nullable();
            $table->string('field_survey_file')->nullable();
            $table->text('field_survey_notes')->nullable();
            $table->string('field_survey_number')->nullable();
            $table->string('nomor_diskusi')->nullable();
            $table->string('lampiran_undangan')->nullable();
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
        Schema::dropIfExists('andalalin_diskusi');
    }
};