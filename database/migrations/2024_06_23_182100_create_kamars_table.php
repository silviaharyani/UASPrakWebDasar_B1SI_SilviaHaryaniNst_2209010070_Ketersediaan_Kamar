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
        Schema::create('kamars', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_kamar');
            $table->unsignedBigInteger('tipe_kamar_id');
            $table->foreign('tipe_kamar_id')->references('id')->on('tipe_kamars')->onDelete('cascade');
            $table->enum('status_ketersediaan', ['tersedia', 'tidak tersedia'])->default('tersedia');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamars');
    }
};
