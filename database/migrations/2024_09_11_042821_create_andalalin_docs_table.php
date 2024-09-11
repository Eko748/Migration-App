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
        Schema::create('andalalin_docs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('andalalin_id')->nullable();
            $table->unsignedBigInteger('ref_id')->nullable();
            $table->foreign('andalalin_id')->references('id')->on('andalalin')->onDelete('cascade');
            $table->string('nama')->nullable();
            $table->text('nama_file')->nullable();
            $table->string('tipe_file')->nullable();
            $table->string('ukuran_file')->nullable();
            $table->string('stat')->nullable();
            $table->tinyInteger('init_verified')->nullable();
            $table->text('init_notes')->nullable();
            $table->tinyInteger('final_verified')->nullable();
            $table->text('final_notes')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('andalalin_docs');
    }
};