<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Detail extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'nama' => 'Hoodie',
                'harga' => 15000,
                'merek' => 'Dickies',
                'imageurl' => 'hoodie_thrifting.jpg',
            ],
            [
                'id' => 2,
                'nama' => 'Jaket',
                'harga' => 25000,
                'merek' => 'cosby',
                'imageurl' => 'jaket.jpg',
            ],
            [
                'id' => 3,
                'nama' => 'Kaos',
                'harga' => 35000,
                'merek' => 'Dracut',
                'imageurl' => 'kaos_thrifting.jpg',
            ],
            [
                'id' => 4,
                'nama' => 'Sweater',
                'harga' => 45000,
                'merek' => 'Balenciaga',
                'imageurl' => 'sweater_thrifting.jpg',
            ],
            [
                'id' => 5,
                'nama' => 'Celana',
                'harga' => 75000,
                'merek' => 'Burberry',
                'imageurl' => 'thrifting_celana.jpg',
            ],
            [
                'id' => 6,
                'nama' => 'Topi',
                'harga' => 12000,
                'merek' => 'elesse',
                'imageurl' => 'topi_thrifting.jpg',
            ],
        ];

        // Insert data into the table
        $this->db->table('detail')->insertBatch($data);
    }
}