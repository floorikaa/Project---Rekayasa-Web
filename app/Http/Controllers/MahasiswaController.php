<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        $mahasiswa = [
            'nim' => '251011700437',
            'nama'=> 'Rika Amelia Fitriani',
            'jurusan' => 'Sistem Informasi',
            'kampus'=> 'Universitas Pamulang',
            'email' => 'rikaameliaxx@gmail.com',
            'status'=> 'Aktif',
        ];
        return view('mahasiswa',compact ('mahasiswa'));
    }
}