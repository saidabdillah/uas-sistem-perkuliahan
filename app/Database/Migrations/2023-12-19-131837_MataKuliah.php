<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MataKuliah extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'INT',
                'auto_increment'    => true,
            ],
            'kode_mata_kuliah' => [
                'type'              => 'VARCHAR',
                'unique'            => true,
                'constraint'        => 5,
            ],
            'nama_mata_kuliah' => [
                'type'              => 'VARCHAR',
                'constraint'        => 100,
            ],
            'created_at' => [
                'type'              => 'DATETIME',
            ],
            'updated_at' => [
                'type'              => 'DATETIME',
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('mata_kuliah');
    }

    public function down()
    {
        $this->forge->dropTable('mata_kuliah');
    }
}
