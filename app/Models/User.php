<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * Tambahkan 'role' jika kamu ingin menyimpan peran user (admin/user/dll).
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean', // jika kamu menambahkan kolom is_admin
    ];

    /**
     * Mutator: otomatis hash password saat diset via model (mass assignment atau setAttribute).
     *
     * Usage: $user->password = 'plain';
     * akan otomatis di-hash.
     */
    public function setPasswordAttribute($value)
    {
        if ($value !== null && $value !== '') {
            // hanya hash jika belum hashed (cek panjang atau pola bisa diadaptasi)
            if ( ! Hash::needsRehash($value) ) {
                $this->attributes['password'] = Hash::make($value);
            } else {
                $this->attributes['password'] = $value;
            }
        }
    }

    /**
     * Contoh helper untuk memeriksa role admin.
     * Gunakan: $user->isAdmin()
     */
    public function isAdmin(): bool
    {
        // jika menggunakan kolom 'role'
        if (isset($this->role)) {
            return $this->role === 'admin';
        }

        // fallback ke kolom boolean is_admin (jika ada)
        return (bool) ($this->is_admin ?? false);
    }

    /**
     * Contoh relasi (jika diperlukan).
     * public function posts()
     * {
     *     return $this->hasMany(Post::class);
     * }
     */
}
