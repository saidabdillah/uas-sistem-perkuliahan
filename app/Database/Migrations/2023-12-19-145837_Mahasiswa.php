<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_mahasiswa' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,
            ],
            'nim' => [
                'type'          => 'CHAR',
                'constraint'    => 9,
            ],
            'jurusan' => [
                'type'          => 'ENUM',
                'constraint'    => ['IK', 'TI', 'SI'],
            ],
            'jenis_kelamin' => [
                'type'          => 'ENUM',
                'constraint'    => ['L', 'P'],
            ],
            'email' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,
            ],
            'alamat' => [
                'type'          => 'TEXT'
            ],
            'created_at' => [
                'type'          => 'DATETIME',
            ],
            'updated_at' => [
                'type'          => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('id', 'true');
        $this->forge->createTable('mahasiswa');
    }

    public function down()
    {
        $this->forge->dropTable('mahasiswa');
    }
}
