<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Form2 extends Migration
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
            'nama' => $this->makeVC255(),
            'norm' => $this->makeVC255(),
            'tgllahir' => ['type' => 'DATE'],
            'nik' => $this->makeVC255(),
            'jenis_bahasa' => $this->makeVC255(),
            'bahasa' => $this->makeVC255(),
            'penerjemah' => $this->makeVC255(),
            'keterbatasan' => $this->makeVC255(),
            'cara_belajar' => $this->makeVC255(),
            'tingkat_pendidikan' => $this->makeVC255(),
            'kemampuan_membaca' => $this->makeVC255(),
            'hambatan' => $this->makeVC255(),
            'kesediaan' => $this->makeVC255(),
            'kebutuhan_pendidikan' => $this->makeVC255(),
            'waktu_pemberian' => ['type' => 'DATETIME'],
            'pemberi_pendidikan' => $this->makeVC255(),
            'sasaran' => $this->makeVC255(),
            'cara_edukasi' => $this->makeVC255(),
            'nama_pa' => $this->makeVC255(),
            'norm_pa' => $this->makeVC255(),
            'tgllahir_pa' => $this->makeVC255(),
            'nik_pa' => $this->makeVC255(),
            'm_a' => $this->makeVC10(),
            'm_b' => $this->makeVC10(),
            'm_c' => $this->makeVC10(),
            'm_d' => $this->makeVC10(),
            'm_e' => $this->makeVC10(),
            'm_f' => $this->makeVC10(),
            'm_waktu' => ['type' => 'DATETIME'],
            'm_pasien' => $this->makeVC255(),
            'm_edukator' => $this->makeVC255(),
            'k_a' => $this->makeVC10(),
            'k_b' => $this->makeVC10(),
            'k_c' => $this->makeVC10(),
            'k_d' => $this->makeVC10(),
            'k_e' => $this->makeVC10(),
            'k_f' => $this->makeVC10(),
            'k_g' => $this->makeVC10(),
            'k_h' => $this->makeVC10(),
            'k_waktu' => ['type' => 'DATETIME'],
            'k_pasien' => $this->makeVC255(),
            'k_edukator' => $this->makeVC255(),
            'f_a' => $this->makeVC10(),
            'f_b' => $this->makeVC10(),
            'f_c' => $this->makeVC10(),
            'f_d' => $this->makeVC10(),
            'f_e' => $this->makeVC10(),
            'f_f' => $this->makeVC10(),
            'f_waktu' => ['type' => 'DATETIME'],
            'f_pasien' => $this->makeVC255(),
            'f_edukator' => $this->makeVC255(),
            'dn_a' => $this->makeVC10(),
            'dn_b' => $this->makeVC10(),
            'dn_c' => $this->makeVC10(),
            'dn_d' => $this->makeVC10(),
            'dn_waktu' => ['type' => 'DATETIME'],
            'dn_pasien' => $this->makeVC255(),
            'dn_edukator' => $this->makeVC255(),
            'rm_a' => $this->makeVC10(),
            'rm_waktu' => ['type' => 'DATETIME'],
            'rm_pasien' => $this->makeVC255(),
            'rm_edukator' => $this->makeVC255(),
            'mn_a' => $this->makeVC10(),
            'mn_b' => $this->makeVC10(),
            'mn_waktu' => ['type' => 'DATETIME'],
            'mn_pasien' => $this->makeVC255(),
            'mn_edukator' => $this->makeVC255()
        ]);
        $this->forge->addPrimaryKey('id');

        $this->forge->createTable('form2');
    }

    public function down()
    {
        $this->forge->dropTable('form2');
    }
    private function makeVC10()
    {
        return [
            'type' => 'VARCHAR',
            'constraint' => 10,
        ];
    }
    private function makeVC255()
    {
        return [
            'type' => 'VARCHAR',
            'constraint' => 100,
        ];
    }
}
