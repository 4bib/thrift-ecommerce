<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        $data = [
            "title" => "About Us",
            "nama" => "Mohammad Baharudin Yusuf",
            "kelas" => "3D",
            "npm" => "2210631170079",
            "alamat" => "Tangerang",
            "email" => "yusufbaharudin33@gmail.com"
        ];

        return view('about', $data);
    }
}