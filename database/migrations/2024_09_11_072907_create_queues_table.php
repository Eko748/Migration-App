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
        Schema::create('queue', function (Blueprint $table) {
            $table->id();
            $table->string('andalalin_id')->nullable();
            $table->string('status')->nullable();
            $table->string('queued_on')->nullable();
            $table->string('channel')->nullable();
            $table->string('sent_on')->nullable();
            $table->text('sent_result')->nullable();
            $table->string('status_by')->nullable();
            $table->string('status_by_type')->nullable();
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
        Schema::dropIfExists('queue');
    }
};
