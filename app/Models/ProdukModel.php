<?php
namespace App\Models;
use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';
    protected $primarykey = 'id';
    protected $protectFields = false;
    public function getAllProduk(){
        return $this->findAll();
    }
    public function create($data){
        return $this->insert($data);
    }
}