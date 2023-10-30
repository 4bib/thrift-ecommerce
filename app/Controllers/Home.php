<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
  {
    $mahasiswa = $this->MahasiswaModel->getAllMahasiswa();
    $data = [
      "title" => "Home",
      "mahasiswa" => $mahasiswa
    ];
    return view('index', $data);
  }
}