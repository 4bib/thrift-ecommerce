<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function home(): string
    {
        $produk = $this->produkModel->getAllproduk();
        $data = [
            "title" => "home",
            "produk" => $produk
        ];
        return view('home', $data);
    }
    public function input(): string
    {
        $data = [
            "title" => "input",
        ];
        return view('create', $data);
    }
    public function create()
    {
        $nama = $this->request->getvar("nama");
        $harga = $this->request->getVar("harga");
        $deskripsi = $this->request->getVar("deskripsi");
        $data = [
            "nama"=> $nama,
            "harga" => $harga,
            "deskripsi" => $deskripsi
            ];
        $this->produkModel->create($data);
        return redirect()->to(base_url());
    }
}