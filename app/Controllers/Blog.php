<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        // Data ini nantinya diambil dari Database (Model)
        $data['posts'] = [
            [
                'id' => 1,
                'title' => 'UM Raih Peringkat Atas dalam Inovasi Pembelajaran Digital',
                'excerpt' => 'Penghargaan ini menegaskan posisi UM sebagai kampus rujukan teknologi edukasi...',
                'date' => '7 April 2026',
                'image' => 'blog-1.jpg'
            ],
            [
                'id' => 2,
                'title' => 'Pembukaan Pendaftaran Mahasiswa Baru Jalur Mandiri 2026',
                'excerpt' => 'Segera siapkan diri Anda untuk bergabung menjadi bagian dari keluarga besar UM...',
                'date' => '6 April 2026',
                'image' => 'blog-2.jpg'
            ]
        ];

        return view('blog/index', $data);
    }
}