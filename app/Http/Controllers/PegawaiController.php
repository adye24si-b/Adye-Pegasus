<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PegawaiController extends Controller
{
    public function index()
    {
        $tanggalLahir = Carbon::create(1995, 5, 15);
        $tanggalHarusWisuda = Carbon::create(2027, 8, 30);
        $semesterSaatIni = 4;

        $data = [
            'name'               => 'John Doe',
            'my_age'             => $tanggalLahir->diffInYears(Carbon::now()),
            'hobbies'            => [
                'membaca buku',
                'bermain game',
                'mendengarkan musik',
                'berkebun',
                'memasak'
            ],
            'tgl_harus_wisuda'   => $tanggalHarusWisuda->format('d-m-Y'),
            'time_to_study_left' => Carbon::now()->diffInDays($tanggalHarusWisuda, false) . ' hari',
            'current_semester'   => $semesterSaatIni,
            'status'             => ($semesterSaatIni < 3) ? 'Masih Awal, Kejar TAK' : 'Jangan main-main, kurang-kurangi main game!',
            'future_goal'        => 'Menjadi seorang full-stack developer'
        ];

        return view('pegawai', compact('data'));
    }
}
