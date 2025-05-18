<?php

// app/Models/User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany; // Import HasMany

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Relasi ke Siswa
    public function siswas()
    {
        return $this->hasMany(Siswa::class, 'guru_id');
    }
}
