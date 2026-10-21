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
    Schema::create('angsurans', function (Blueprint $table) {
        $table->id();
        // Relasi ke tabel pinjamans
        $table->foreignId('pinjaman_id')->constrained('pinjamans')->onDelete('cascade');
        $table->date('tanggal_bayar');
        $table->integer('jumlah_bayar');
        $table->integer('angsuran_ke'); // Misal: cicilan ke-1, ke-2, dst.
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('angsurans');
    }
};
