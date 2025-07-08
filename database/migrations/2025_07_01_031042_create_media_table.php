<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable  extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id('media_id');
            $table->foreignId('mahasiswa_id')->references('mahasiswa_id')->on('mahasiswa');
            $table->foreignId('kategori_id')->references('kategori_id')->on('kategori');
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('judul_penelitian');
            $table->year('tahun_terbit');
            $table->text('link_media')->nullable();
            $table->string('gambar_cover')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};