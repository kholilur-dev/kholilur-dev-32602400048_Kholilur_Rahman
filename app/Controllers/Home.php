<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function profile(): string
    {
        $data = [
            'title'      => 'My Profile',
            'name'       => 'Kholilur',
            'nim'        => '32602400048',
            'major'      => 'Teknik Informatika',
            'university' => 'Universitas Islam Sultan Agung (UNISSULA)',
            'city'       => 'Semarang, Indonesia',
            'bio'        => 'Mahasiswa aktif yang tertarik pada dunia frontend development. Senang membangun tampilan website yang unik, interaktif, dan fungsional.',
            'email'      => 'kholilur@example.com',
            'socials'    => [
                ['name' => 'LinkedIn', 'url' => '#'],
                ['name' => 'Instagram', 'url' => '#'],
                ['name' => 'GitHub', 'url' => '#'],
            ],
        ];

        // Menampilkan view profile.php dengan data
        return view('profile', $data);
    }

    public function skill(): string
    {
        $data = [
            'title'  => 'My Skills',
            'skills' => [
                ['name' => 'HTML & CSS', 'level' => 90],
                ['name' => 'JavaScript', 'level' => 75],
                ['name' => 'PHP & CodeIgniter 4', 'level' => 80],
                ['name' => 'UI/UX Design', 'level' => 70],
            ],
        ];

        // Menampilkan view skill.php dengan data
        return view('skill', $data);
    }
}