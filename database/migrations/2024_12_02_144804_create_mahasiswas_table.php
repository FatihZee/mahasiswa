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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nim')->unique(); // NIM mahasiswa (unik)
            $table->string('nama_mahasiswa'); // Nama mahasiswa
            $table->string('email')->unique(); // Email mahasiswa (unik)
            $table->string('jurusan'); // Jurusan mahasiswa
            $table->foreignId('dosen_id')
                ->nullable() // Kolom dosen_id harus bisa null
                ->constrained('dosens') // Mengacu ke tabel 'dosens'
                ->onDelete('set null') // Set null jika dosen dihapus
                ->onUpdate('cascade'); // Perbarui mahasiswa jika ID dosen berubah
            $table->foreignId('mata_kuliah_id') // Kolom relasi mata kuliah
                ->nullable() // Mata kuliah bisa null jika belum dipilih
                ->constrained('mata_kuliahs') // Mengacu ke tabel mata_kuliahs
                ->onDelete('set null') // Set null jika mata kuliah dihapus
                ->onUpdate('cascade'); // Perbarui jika ID mata kuliah berubah
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};