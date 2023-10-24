<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            "title" => "Home",
            "nama" => "Mohammad Baharudin Yusuf"
        ];

        return view('home', $data);
    }
}