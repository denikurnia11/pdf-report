<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Form9 extends Migration
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

        $abc = [
            'cara_masuk' => $this->VC(50),
            'asal_masuk' => $this->VC(50),
            'alergi' => $this->VC(10),
            'alergi_ya' => $this->VC(50),
            'tindakan' => $this->VC(50),
            'tindakan_lain' => $this->VC(50),
            'td' => $this->VC(50),
            'dj' => $this->VC(50),
            'pernafasan' => $this->VC(50),
            'suhu' => $this->VC(50),
            'so' => $this->VC(50),
            'kesadaran' => $this->VC(50),
            'gcse' => $this->VC(50),
            'gcsm' => $this->VC(50),
            'gcsv' => $this->VC(50),
            'pendengaran' => $this->VC(50),
            'pendengaran_lain' => $this->VC(50),
            'penglihatan' => $this->VC(50),
            'penglihatan_lain' => $this->VC(50),
            'bicara' => $this->VC(50),
        ];

        $def = [
            'pernapasan' => ['type' => 'TEXT'],
            'pernapasan_kelainan' => ['type' => 'TEXT'],
            'batuk' => ['type' => 'TEXT'],
            'batuk_ya' => ['type' => 'TEXT'],
            'sputum' => ['type' => 'TEXT'],
            'sputum_ya' => ['type' => 'TEXT'],
            'nadi' => ['type' => 'TEXT'],
            'nadi_adakah' => ['type' => 'TEXT'],
            'nadi_jelaskan' => ['type' => 'TEXT'],
            'ekstremitas' => ['type' => 'TEXT'],
            'lukalesi' => $this->VC(10),
            'jenis_luka' => $this->VC(20),
            'lokasi_luka' => $this->VC(20),
            'lokasi_luka_lain' => ['type' => 'TEXT'],
            'luka_karena' => ['type' => 'TEXT'],
            'luka_karena_lain' => ['type' => 'TEXT'],
            'radang' => ['type' => 'TEXT'],
        ];

        $g = [
            'kebiasaan_periksa' => ['type' => 'TEXT'],
            'riwayat_nutrisi' => ['type' => 'TEXT'],
            'porsi_makan' => $this->VC(10),
            'diet' => ['type' => 'TEXT'],
            'frekuensi' => ['type' => 'TEXT'],
            'ngt' => ['type' => 'TEXT'],
            'terpasang_ngt' => ['type' => 'TEXT'],
            'tujuan_ngt' => ['type' => 'TEXT'],
            'jumlah_minum_ngt' => ['type' => 'TEXT'],
            'bab' => ['type' => 'TEXT'],
            'konsistensi' => ['type' => 'TEXT'],
            'warna' => ['type' => 'TEXT'],
            'keluhan' => ['type' => 'TEXT'],
            'keluhan_lain' => ['type' => 'TEXT'],
            'bak' => ['type' => 'TEXT'],
            'jenis_bak' => ['type' => 'TEXT'],
            'jumlah_bak' => ['type' => 'TEXT'],
            'warna_urine' => ['type' => 'TEXT'],
            'terpasang_kateter' => ['type' => 'TEXT'],
            'hari_kateter' => ['type' => 'TEXT'],
            'gangguan_tidur' => ['type' => 'TEXT'],
            'ganguan_tidur_jelaskan' => ['type' => 'TEXT'],
            'koping' => ['type' => 'TEXT'],
            'penyelesaian_masalah' => ['type' => 'TEXT'],
            'ibadah' => ['type' => 'TEXT'],
            'pelayanan' => ['type' => 'TEXT'],
            'pengetahuan_penyakit' => ['type' => 'TEXT'],
            'perawatan' => ['type' => 'TEXT'],
            'gambaran_diri' => ['type' => 'TEXT'],
            'ideal_diri' => ['type' => 'TEXT'],
            'harga_diri' => ['type' => 'TEXT'],
            'peran' => ['type' => 'TEXT'],
            'identitas_diri' => ['type' => 'TEXT'],
            'alat_bantu' => $this->VC(10),
            'sesak_nafas' => $this->VC(10),
            'kekuatan_otot' => ['type' => 'TEXT'],
            'hubungan_orang' => $this->VC(20),
            'peran_dikeluarga' => $this->VC(10),
            'peran_lain' => ['type' => 'TEXT'],
            'peran_selama_sakit' => ['type' => 'TEXT'],
            'jumlah_anak' => $this->VC(10),
            'menikah_umur' => $this->VC(10),
            'anak_pertama' => $this->VC(10),
            'penyakit_kelamin' => $this->VC(10),
            'jenis_keluhan' => ['type' => 'TEXT'],

        ];

        $h = [
            'kondisi_umum' => $this->VC(40),
            'kesadaran_skor' => $this->VC(40),
            'aktifitas' => $this->VC(40),
            'mobilitas' => $this->VC(40),
            'inkontinensia_urin' => $this->VC(40),
            'decubitus' => $this->VC(10),
            'derajat' => $this->VC(10),
            'pernah_jatuh' => $this->VC(10),
            'bulan_jatuh' => $this->VC(10),
            'tahun_jatuh' => $this->VC(10),
            'kontraktur' => $this->VC(10),
            'letak_nyeri' => $this->VC(50),
            'alat_bantu_h' => $this->VC(10),
            'jenis_alat_bantu_h' => $this->VC(20),
            'memori' => $this->VC(20),
        ];

        $i = [
            'soal1' => $this->VC(100),
            'soal2' => $this->VC(50),
            'soal3' => $this->VC(10),
            'total_skor' => $this->VC(10),
            'diagnosis_khusus' => $this->VC(10),
            'diagnosis_khusus_sebutkan' => $this->VC(50),
            'kesimpulan' => $this->VC(10),
            'soal4' => $this->VC(10),
            'soal5' => $this->VC(10),
            'nilai1' => $this->VC(10),
            'nilai2' => $this->VC(10),
            'nilai3' => $this->VC(10),
            'nilai4' => $this->VC(10),
            'nilai5' => $this->VC(10),
            'soal5_sebutkan' => $this->VC(50),
            'soal6' => $this->VC(10),
            'soal7' => $this->VC(10),
            'kesimpulan2' => $this->VC(10),
        ];

        $this->forge->addField(array_merge($bio, $abc, $def, $g, $h, $i));
        $this->forge->addPrimaryKey('id');

        $this->forge->createTable('form9');
    }

    public function down()
    {
        $this->forge->dropTable('form9');
    }
    private function VC($constraint)
    {
        return [
            'type' => 'VARCHAR',
            'constraint' => $constraint,
        ];
    }
}
