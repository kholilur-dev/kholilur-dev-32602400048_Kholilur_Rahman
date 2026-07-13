<?php

namespace App\Controllers;

class Mahasiswa extends BaseController {
    public function form() {
        return view('mahasiswa_form');
    }

    public function submit() {
        $nama = $this->request->getPost('nama');
        $nim = $this->request->getPost('nim');
        $kelas = $this->request->getPost('kelas');
        $mata_kuliah = $this->request->getPost('mata_kuliah');
        $dosen = $this->request->getPost('dosen');
        $asisten = $this->request->getPost('asisten');

        return "<h2>Data Mahasiswa</h2>
                <ul>
                    <li>Nama: $nama</li>
                    <li>NIM: $nim</li>
                    <li>Kelas: $kelas</li>
                    <li>Mata Kuliah: $mata_kuliah</li>
                    <li>Dosen: $dosen</li>
                    <li>Asisten: $asisten</li>
                </ul>";

    }
}