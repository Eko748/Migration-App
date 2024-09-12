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
        Schema::create('andalalin_permohonan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('konsultan_id')->nullable();
            // $table->foreign('konsultan_id')->references('id')->on('konsultan')->onDelete('cascade');
            $table->unsignedBigInteger('company_id')->nullable();
            // $table->foreign('perusahaan_id')->references('id')->on('perusahaan')->onDelete('cascade');
            $table->string('nib')->nullable();
            $table->string('no_andalalin')->nullable();
            $table->tinyText('nama_proyek')->nullable();
            $table->string('status')->nullable();
            $table->string('module')->nullable();
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
        Schema::dropIfExists('andalalin_permohonan');
    }
};
