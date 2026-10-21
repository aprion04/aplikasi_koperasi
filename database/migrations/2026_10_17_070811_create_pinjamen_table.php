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
    Schema::create('pinjamans', function (Blueprint $table) {
        $table->id();
        // Relasi ke tabel anggotas
        $table->foreignId('anggota_id')->constrained('anggotas')->onDelete('cascade');
        $table->date('tanggal_pinjam');
        $table->integer('jumlah_pinjaman');
        $table->integer('lama_angsuran'); // Misal: 10 bulan
        $table->enum('status', ['belum_lunas', 'lunas'])->default('belum_lunas');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjamen');
    }
};
