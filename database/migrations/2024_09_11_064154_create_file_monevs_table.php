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
        Schema::create('file_monev', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sk_rekomendasi_id')->nullable();
            $table->string('no_berita_acara')->nullable();
            $table->date('tgl_monev')->nullable();
            $table->string('keterangan')->nullable();
            $table->text('file_monev')->nullable();
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
        Schema::dropIfExists('file_monev');
    }
};