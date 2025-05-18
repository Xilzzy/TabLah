<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_xxxxxx_create_transaksi_table.php
public function up()
{
    Schema::create('transaksi', function (Blueprint $table) {
        $table->id(); // ID unik untuk setiap transaksi
        $table->foreignId('siswa_id')->constrained('siswa'); // Relasi ke tabel siswa
        $table->foreignId('guru_id')->constrained('users'); // Relasi ke tabel users (guru yang memantau transaksi)
        $table->decimal('jumlah', 10, 2); // Jumlah transaksi
        $table->timestamp('tanggal'); // Tanggal transaksi
        $table->timestamps(); // Kolom untuk tanggal dibuat dan diperbarui
    });
}

public function down()
{
    Schema::dropIfExists('transaksi'); // Hapus tabel saat rollback
}

};
