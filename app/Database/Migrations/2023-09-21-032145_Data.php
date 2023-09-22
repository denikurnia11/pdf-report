<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Data extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => null,
            ],
            'hal' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'null' => true,
                'default' => 1,
            ],
            'status' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'null' => true,
                'default' => 1,
            ],
            'form' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'null' => true,
                'default' => null,
            ],
        ]);
        $this->forge->addKey('id', true);

        $this->forge->createTable('data');
    }

    public function down()
    {
        $this->forge->dropTable('data');
    }
}
