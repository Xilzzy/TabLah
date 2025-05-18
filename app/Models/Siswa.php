<?php
// app/Models/Siswa.php

// app/Models/Siswa.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Tambahkan import User jika menggunakan tabel users

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'guru_id', 'tabungan'];

    // Relasi ke Transaksi
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

    // Relasi ke Guru (User)
    public function guru()
    {
        return $this->belongsTo(User::class, 'guru_id');
    }
}
