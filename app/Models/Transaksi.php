<?php 
// app/Models/Transaksi.php

// app/Models/Transaksi.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Tambahkan import User jika menggunakan tabel users
use App\Models\Siswa;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['siswa_id', 'guru_id', 'jumlah', 'tanggal'];

    // Relasi ke Siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    // Relasi ke Guru (User)
    public function guru()
    {
        return $this->belongsTo(User::class, 'guru_id');
    }
}
