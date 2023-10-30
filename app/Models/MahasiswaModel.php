<?php
namespace App\Models;

use CodeIgniter\Model;


class MahasiswaModel extends Model
{
    protected $allowedFields = ['nama', 'npm', 'prodi'];
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id';


    public function getAllMahasiswa()
    {
        return $this->findAll();
    }
}