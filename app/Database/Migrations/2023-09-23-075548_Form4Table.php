<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Form4Table extends Migration
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
            'jenis_tindakan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'lokasi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'tgl_mulai' => [
                'type' => 'DATE',
            ],
            'tgl_selesai' => [
                'type' => 'DATE',
            ],
            'total_hari' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'tgl_infeksi' => [
                'type' => 'DATE',
            ],
            'tgl_infeksi2' => [
                'type' => 'DATE',
            ],
            'form4_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');

        // Tambahkan kunci asing dengan ON DELETE dan ON UPDATE CASCADE
        $this->forge->addForeignKey('form4_id', 'form4', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('form4table');
    }

    public function down()
    {
        $this->forge->dropTable('form4table');
    }
}
