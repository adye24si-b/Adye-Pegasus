<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Opsional, tapi disarankan

class Pelanggan extends Model
{
    // Jika Anda menggunakan Laravel 8/9/10, tambahkan ini
    use HasFactory;

    protected $table = 'pelanggan';
    protected $primaryKey = 'pelanggan_id';

    // PERBAIKAN: Menggunakan $fillable (huruf kecil)
    protected $fillable = [
        'first_name',
        'last_name',
        'birthday',
        'gender',
        'email',
        'phone',
    ]; // PERBAIKAN: Menambahkan titik koma di sini
}
