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
        Schema::create('andalalin_diskusi_detil', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('andalalin_diskusi_id')->nullable();
            $table->foreign('andalalin_diskusi_id')->references('id')->on('andalalin_diskusi')->onDelete('cascade');
            $table->unsignedBigInteger('staf_id')->nullable();
            $table->foreign('staf_id')->references('id')->on('staf')->onDelete('cascade');
            $table->text('diskusi')->nullable();
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
        Schema::dropIfExists('andalalin_diskusi_detil');
    }
};