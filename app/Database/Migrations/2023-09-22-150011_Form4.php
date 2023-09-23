<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Form4 extends Migration
{
    public function up()
    {
        // Page 1
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
        $ab = [
            'diagnosa_masuk' => $this->VC(255),
            'pindah_keruangan1' => $this->VC(100),
            'tanggal_pindah1' => ['type' => 'DATE', 'default' => null],
            'pindah_keruangan2' => $this->VC(100),
            'tanggal_pindah2' => ['type' => 'DATE', 'default' => null],
        ];
        $faktorPenyakit = [
            'hbs' => $this->VC(50),
            'hcv' => $this->VC(50),
            'hiv' => $this->VC(50),
            'faktor_lain' => $this->VC(100),
            'faktor_lain_pilih' => $this->VC(50),
        ];
        $hasilLaboratorium = [
            'lekosit' => $this->VC(100),
            'led' => $this->VC(100),
            'gds' => $this->VC(100),
        ];
        $hasilRadiologi = [
            'hasil_radiologi' => $this->VC(255),
        ];
        $to = [
            'diagnosa' => $this->VC(255),
            'tgl_operasi' => ['type' => 'DATE', 'default' => null],
            'jam_operasi' => $this->VC(10),
            'menit_operasi' => $this->VC(10),
            'tgl_operasi2' => ['type' => 'DATE', 'default' => null],
            'jam_operasi2' => $this->VC(10),
            'menit_operasi2' => $this->VC(10),
            'jenis_operasi' => $this->VC(100),
            'tindakan_operasi' => $this->VC(100),
            'tindakan_operasi_lain' => $this->VC(100),
            'asa' => $this->VC(10),
        ];
        $komplikasiInfeksi = [
            'ilo' => $this->VC(20),
            'hari_ilo' => $this->VC(20),
            'hasil_ilo' => $this->VC(255),
            'isk' => $this->VC(20),
            'hari_isk' => $this->VC(20),
            'hasil_isk' => $this->VC(255),
            'pnemonia' => $this->VC(20),
            'hari_pnemonia' => $this->VC(20),
            'hasil_pnemonia' => $this->VC(255),
            'iadp' => $this->VC(20),
            'hari_iadp' => $this->VC(20),
            'hasil_iadp' => $this->VC(255),
            'plebitis' => $this->VC(20),
            'hari_plebitis' => $this->VC(20),
            'hasil_plebitis' => $this->VC(255),
            'decubitus' => $this->VC(20),
            'hari_decubitus' => $this->VC(20),
        ];
        $pemakaianAntimikroba = [
            'pemakaian' => $this->VC(100),
            'dosis' => $this->VC(100),
            'tgl_mulai_am' => ['type' => 'DATE', 'default' => null],
            'tgl_selesai_am' => ['type' => 'DATE', 'default' => null],
            'pemakaian2' => $this->VC(100),
            'dosis2' => $this->VC(100),
            'tgl_mulai_am2' => ['type' => 'DATE', 'default' => null],
            'tgl_selesai_am2' => ['type' => 'DATE', 'default' => null],
            'pemakaian3' => $this->VC(100),
            'dosis3' => $this->VC(100),
            'tgl_mulai_am3' => ['type' => 'DATE', 'default' => null],
            'tgl_selesai_am3' => ['type' => 'DATE', 'default' => null],
            'pemakaian4' => $this->VC(100),
            'dosis4' => $this->VC(100),
            'tgl_mulai_am4' => ['type' => 'DATE', 'default' => null],
            'tgl_selesai_am4' => ['type' => 'DATE', 'default' => null],
        ];
        $pasienKeluar = [
            'tgl_keluar' => $this->VC(100),
            'pindah' => $this->VC(100),
            'diagnosa_akhir' => $this->VC(255),
        ];

        $ttd = [
            'pj' => $this->VC(100),
            'ipcln' => $this->VC(100),
        ];


        $this->forge->addField(array_merge($bio, $ab, $faktorPenyakit, $hasilLaboratorium, $hasilRadiologi, $to, $komplikasiInfeksi, $pemakaianAntimikroba, $pasienKeluar, $ttd));
        $this->forge->addPrimaryKey('id');

        $this->forge->createTable('form4');
    }

    public function down()
    {
        $this->forge->dropTable('form4');
    }

    private function VC($constraint)
    {
        return [
            'type' => 'VARCHAR',
            'constraint' => $constraint,
        ];
    }
}
