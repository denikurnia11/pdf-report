<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Form3Persalinan extends Migration
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
            'tgl_partus' => [
                'type' => 'DATE',
            ],
            'tempat_partus' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'umur_hamil' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'jenis_persalinan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'penolong_persalinan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'penyulit' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'jkbb' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'keadaan_anak' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'form3_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');

        // Tambahkan kunci asing dengan ON DELETE dan ON UPDATE CASCADE
        $this->forge->addForeignKey('form3_id', 'form3', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('form3_persalinan');
    }

    public function down()
    {
        $this->forge->dropTable('form3_persalinan');
    }
}
