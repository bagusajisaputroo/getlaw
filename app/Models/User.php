<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Pastikan menggunakan kelas ini
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable // Ubah Model menjadi Authenticatable
{
    use HasFactory, Notifiable; // Tambahkan Notifiable

    protected $table = 'users';

    protected $fillable = [
        'name', // Ganti 'nama_user' dengan 'name'
    'email',
    'password',
    'role',
    ];


    public function books()
    {
        return $this->belongsTo(Books::class);
    }
}