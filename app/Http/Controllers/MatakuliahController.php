<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Menampilkan daftar matakuliah.
     */
    public function index()
    {
        return "Menampilkan data matakuliah";
    }

    /**
     * Menampilkan detail matakuliah tertentu.
     *
     * @param  string|null  $kode
     * @return string
     */
    public function show($kode = null)
    {
        if ($kode) {
            return "Anda mengakses matakuliah " . $kode;
        } else {
            return "Masukkan kode matakuliah!";
        }
    }
}
