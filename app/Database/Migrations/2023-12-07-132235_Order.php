<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Order extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_product' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'penerima' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'jumlah' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'kodepos' => [
                'type' => 'INT',
                'constraint' => 7,
            ],
            'kecamatan' => [
                'type' => 'CHAR',
                'constraint' => 255,
            ],
            'kota' => [
                'type' => 'CHAR',
                'constraint' => 255,
            ],
            'propinsi' => [
                'type' => 'CHAR',
                'constraint' => 255,
            ],
            'alamat' => [
                'type' => 'TEXT',
            ],
            'jumlahbiaya' => [
                'type' => 'FLOAT',
            ],
            'bukti_pembayaran' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_product', 'detail', 'id');
        $this->forge->createTable('order');
    }

    public function down()
    {
        $this->forge->dropTable('order');
    }
}