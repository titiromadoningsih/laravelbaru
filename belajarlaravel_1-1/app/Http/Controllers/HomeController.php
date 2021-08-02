<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'nama_mahasiswa' => 'Nur Khomalasari',
            'kelas' => '4F',
            'prodi' => 'D3 Teknik Komputer',
            'nama_perguruan_tinggi' => 'Politeknik Harapan Bersama Tegal',
            'alamat'       => 'Jl. Mataram No.9 Pesurungan Tegal'
        ];
        return view('v_home', $data);
    }

    public function about($id)
    {
        return 'Ini Halaman About<br>' .$id;
    }
}
