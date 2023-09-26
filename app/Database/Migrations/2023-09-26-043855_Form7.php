<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Form7 extends Migration
{
    public function up()
    {
        $bio = [
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' => $this->VC(100),
            'norm' => $this->VC(100),
            'tgllahir' => ['type' => 'DATE'],
            'nik' => $this->VC(100),
        ];
        $saatMasukRS = [
            'tgl_masuk' => ['type' => 'DATE'],
            'jam_masuk' => $this->VC(10),
            'alasan_masuk' => $this->VC(255),
            'diagnosa_medis' => $this->VC(255),
            'tgl_estimasi' => ['type' => 'DATE'],
        ];
        $krp = [
            'pkp' => $this->VC(10),
            'pkp_ya' => $this->VC(100),
            'ps' => $this->VC(10),
            'ps_ya' => $this->VC(100),
            'keuangan' => $this->VC(10),
            'keuangan_ya' => $this->VC(100),
            'antisipasi' => $this->VC(10),
            'antisipasi_ya' => $this->VC(100),
            // Bantuan
            'menyiapkan_makanan' => $this->VC(10),
            'makanan' => $this->VC(10),
            'diet' => $this->VC(10),
            'menyiapkan_obat' => $this->VC(10),
            'minum_obat' => $this->VC(10),
            'mandi' => $this->VC(10),
            'berpakaian' => $this->VC(10),
            'transportasi' => $this->VC(10),
            'edukasi_kesehatan' => $this->VC(10),
            'lainlain_bantuan' => $this->VC(10),
            'lainlain_isi' => $this->VC(100),

            'a4' => $this->VC(10),
            'a4_ya' => $this->VC(100),
            'a5' => $this->VC(10),
            'a5_ya' => $this->VC(100),
            'a6' => $this->VC(10),
            'a6_ya' => $this->VC(100),
            'a7' => $this->VC(10),
            'a7_ya' => $this->VC(100),
            'a8' => $this->VC(10),
            'a8_ya' => $this->VC(100),
            'a9' => $this->VC(10),
            'a9_ya' => $this->VC(100),
            'a10' => $this->VC(10),
            'a10_ya' => $this->VC(100),
            'a11' => $this->VC(10),
            'a11_ya' => $this->VC(100),
            'a12' => $this->VC(10),
            'a12_ya' => $this->VC(100),

        ];

        $ttd = [
            'tgl_ttd' => ['type' => 'DATE'],
            'jam_ttd' => $this->VC(100),
            'nama_perawat' => $this->VC(100),
        ];

        $this->forge->addField(array_merge($bio, $saatMasukRS, $krp, $ttd));
        $this->forge->addPrimaryKey('id');

        $this->forge->createTable('form7');
    }

    public function down()
    {
        $this->forge->dropTable('form7');
    }
    private function VC($constraint)
    {
        return [
            'type' => 'VARCHAR',
            'constraint' => $constraint,
        ];
    }
}
