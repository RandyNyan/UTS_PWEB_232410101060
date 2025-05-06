<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');

        $jadwalKuliah = [
            [
                'no' => 1,
                'hari' => 'Senin',
                'jam' => '09:40 - 11:30 WIB',
                'kode' => 'KSI1502',
                'matakuliah' => 'Manajemen Proyek TI',
                'kelas' => 'A',
                'ruang' => 'Ruang Kuliah B1 Gedung 24B UPT Perpustakaan'
            ],
            [
                'no' => 2,
                'hari' => 'Senin',
                'jam' => '13:20 - 15:10 WIB',
                'kode' => 'KSI1509',
                'matakuliah' => 'Tata Kelola TI',
                'kelas' => 'A',
                'ruang' => 'Ruang Kuliah B1 Gedung 24B UPT Perpustakaan'
            ],
            [
                'no' => 3,
                'hari' => 'Senin',
                'jam' => '15:10 - 17:50 WIB',
                'kode' => 'KSI1412',
                'matakuliah' => 'Pemrograman Berbasis Web',
                'kelas' => 'A',
                'ruang' => 'Ruang Kuliah A3.3 Gedung 24A Ilmu Komputer'
            ],
            [
                'no' => 4,
                'hari' => 'Selasa',
                'jam' => '08:50 - 10:30 WIB',
                'kode' => 'KSI1501',
                'matakuliah' => 'Pengembangan Perangkat Lunak Untuk Agroindustri Modern',
                'kelas' => 'A',
                'ruang' => 'Ruang Kuliah A3.1 Gedung 24A Ilmu Komputer'
            ],
            [
                'no' => 5,
                'hari' => 'Selasa',
                'jam' => '12:30 - 14:10 WIB',
                'kode' => 'KSI1413',
                'matakuliah' => 'Professional Issue',
                'kelas' => 'A',
                'ruang' => 'Ruang Kuliah A3.3 Gedung 24A Ilmu Komputer'
            ],
            [
                'no' => 6,
                'hari' => 'Selasa',
                'jam' => '14:20 - 17:00 WIB',
                'kode' => 'KSI1411',
                'matakuliah' => 'Sistem Enterprise',
                'kelas' => 'A',
                'ruang' => 'Ruang Kuliah B1 Gedung 24B UPT Perpustakaan'
            ],
            [
                'no' => 7,
                'hari' => 'Rabu',
                'jam' => '09:40 - 12:20 WIB',
                'kode' => 'KSI1412',
                'matakuliah' => 'Pemrograman Berbasis Web',
                'kelas' => 'A',
                'ruang' => 'Ruang Kuliah C2.1 Gedung 24C Ilmu Komputer'
            ],
            [
                'no' => 8,
                'hari' => 'Rabu',
                'jam' => '13:20 - 16:00 WIB',
                'kode' => 'KSI1502',
                'matakuliah' => 'Manajemen Proyek TI',
                'kelas' => 'A',
                'ruang' => 'Ruang Kuliah A3.3 Gedung 24A Ilmu Komputer'
            ],
            [
                'no' => 9,
                'hari' => 'Rabu',
                'jam' => '16:10 - 17:50 WIB',
                'kode' => 'MPK9006',
                'matakuliah' => 'Pendidikan Kewarganegaraan',
                'kelas' => '36',
                'ruang' => 'R.KUL.C805 Gedung CDAST Selatan Cluster 24'
            ],
            [
                'no' => 10,
                'hari' => 'Kamis',
                'jam' => '08:50 - 10:30 WIB',
                'kode' => 'KSI1407',
                'matakuliah' => 'Data Mining',
                'kelas' => 'A',
                'ruang' => 'Ruang Kuliah B1 Gedung 24B UPT Perpustakaan'
            ],
            [
                'no' => 11,
                'hari' => 'Kamis',
                'jam' => '12:30 - 15:10 WIB',
                'kode' => 'KSI1501',
                'matakuliah' => 'Pengembangan Perangkat Lunak Untuk Agroindustri Modern',
                'kelas' => 'A',
                'ruang' => 'Ruang Kuliah 1 Gedung CDAST Ilmu Komputer'
            ],
            [
                'no' => 12,
                'hari' => 'Kamis',
                'jam' => '15:10 - 17:50 WIB',
                'kode' => 'KSI1509',
                'matakuliah' => 'Tata Kelola TI',
                'kelas' => 'A',
                'ruang' => 'Ruang Kuliah B1 Gedung 24B UPT Perpustakaan'
            ],
            [
                'no' => 13,
                'hari' => 'Jumat',
                'jam' => '12:30 - 15:10 WIB',
                'kode' => 'KSI1407',
                'matakuliah' => 'Data Mining',
                'kelas' => 'A',
                'ruang' => 'Ruang Kuliah C2.1 Gedung 24C Ilmu Komputer'
            ]
        ];

        return view('dashboard', [
            'username' => $username,
            'jadwal' => $jadwalKuliah
        ]);
    }

    public function pengelolaan()
    {
        $data = [
            ['no' => 1, 'nama' => 'Laptop', 'jumlah' => 1],
            ['no' => 2, 'nama' => 'HP', 'jumlah' => 1],
            ['no' => 3, 'nama' => 'Tas', 'jumlah' => 1],
            ['no' => 4, 'nama' => 'Dompet', 'jumlah' => 1],
            ['no' => 5, 'nama' => 'Kartu Uno', 'jumlah' => 1],
            ['no' => 6, 'nama' => 'Botol Minum', 'jumlah' => 1],
            ['no' => 7, 'nama' => 'Stop Kontak', 'jumlah' => 1],
            ['no' => 8, 'nama' => 'Kacamata', 'jumlah' => 1],
            ['no' => 9, 'nama' => 'Scarf Balwana', 'jumlah' => 1],
            ['no' => 10, 'nama' => 'Niat', 'jumlah' => 999]
        ];

        return view('pengelolaan', ['items' => $data]);
    }

    public function profil(Request $request)
    {
        $dataProfil = [
            'nama' => 'Randy Putranto',
            'nim' => '232410101060',
            'fakultas' => 'Ilmu Komputer',
            'universitas' => 'Universitas Jember'
        ];

        return view('profil', [
            'username' => $request->query('username'),
            'profil' => $dataProfil // Perhatikan penamaan variabel ini
        ]);
    }

    public function logout()
    {
        return redirect('/')->with('success', 'Anda telah logout');
    }
}
