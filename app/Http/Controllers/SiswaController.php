<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = [
        ['id' => 1942, 'nama' => 'Michael Jackson', 'kelas' => 'XI RPL 1', 'alamat' => 'Jakarta'],
        ['id' => 3861, 'nama' => 'Freddie Mercury', 'kelas' => 'XI RPL 2', 'alamat' => 'Bandung'],
        ['id' => 7073, 'nama' => 'Elvis Presley', 'kelas' => 'XI RPL 1', 'alamat' => 'Surabaya'],
        ['id' => 5287, 'nama' => 'Brian Johnson', 'kelas' => 'XI RPL 2', 'alamat' => 'Medan'],
        ['id' => 8821, 'nama' => 'Dio Brando', 'kelas' => 'XI RPL 1', 'alamat' => 'Yogyakarta'],
        ['id' => 1359, 'nama' => 'Billie Joe Armstrong', 'kelas' => 'XI RPL 2', 'alamat' => 'Bali'],
        ['id' => 6195, 'nama' => 'Ozzy Osbourne', 'kelas' => 'XI RPL 1', 'alamat' => 'Makassar'],
        ['id' => 4720, 'nama' => 'Kurt Cobain', 'kelas' => 'XI RPL 2', 'alamat' => 'Palembang'],
        ['id' => 3478, 'nama' => 'Axl Rose', 'kelas' => 'XI DKV 1', 'alamat' => 'Medan'],
        ['id' => 7641, 'nama' => 'Steven Tyler', 'kelas' => 'XI DKV 2', 'alamat' => 'Jakarta'],
        ['id' => 8930, 'nama' => 'James Hetfield', 'kelas' => 'XI TKJ 1', 'alamat' => 'Surabaya'],
        ['id' => 2561, 'nama' => 'Lemmy Kilmister', 'kelas' => 'XI TKJ 2', 'alamat' => 'Bali'],
        ['id' => 9874, 'nama' => 'Robert Plant', 'kelas' => 'XI RPL 1', 'alamat' => 'Yogyakarta'],
        ['id' => 1306, 'nama' => 'Mick Jagger', 'kelas' => 'XI RPL 2', 'alamat' => 'Jakarta'],
        ['id' => 6912, 'nama' => 'Roger Daltrey', 'kelas' => 'XI RPL 1', 'alamat' => 'Bandung'],
        ['id' => 4789, 'nama' => 'Paul McCartney', 'kelas' => 'XI RPL 2', 'alamat' => 'Surabaya'],
        ['id' => 8296, 'nama' => 'John Lennon', 'kelas' => 'XI RPL 1', 'alamat' => 'Medan'],
        ['id' => 3467, 'nama' => 'George Harrison', 'kelas' => 'XI RPL 2', 'alamat' => 'Palembang'],
    ];

        return view('siswa',
        [
            'title' => 'Siswa Laravel',
            'judul' => 'Daftar Siswa',
            'judulTabel' => 'Daftar Siswa Kelas XI Tahun Ajaran 1979/1980',
            'no' => 1,
        ],
        compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
