<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Detail extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
            ],
            'harga' => [
                'type' => 'FLOAT',
            ],
            'merek' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'imageurl' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('detail');
    }

    public function down()
    {
        $this->forge->dropTable('detail');
    }
}