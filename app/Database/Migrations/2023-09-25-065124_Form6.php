<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Form6 extends Migration
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
        $alergiObat = [
            'alergi_obat1' => $this->VC(100),
            'alergi_obat2' => $this->VC(100),
            'alergi_obat3' => $this->VC(100),
            'alergi_obat4' => $this->VC(100),
        ];

        $baris3 = [
            'tgl_pemeriksaan' => ['type' => 'DATETIME'],
            'rencana_tindakan' => $this->VC(225),
            'td' => $this->VC(10),
            'bb' => $this->VC(10),
            'tb' => $this->VC(10),
            'nadi' => $this->VC(10),
            'rr' => $this->VC(10),
            'suhu' => $this->VC(10),
        ];
        $baris4 = [
            'tgl_tindakan' => ['type' => 'DATE'],
            'operator' => $this->VC(100),
            'sa' => $this->VC(100),
            'jenis_tindakan' => $this->VC(10),
            'obat_konsumsi' => $this->VC(10),
            'nama_obat' => $this->VC(100),
            'riwayat_anestesi' => $this->VC(100),
            'jgl' => $this->VC(50),
            'keterangan_jgl' => $this->VC(255),
            'anamnesa' => $this->VC(50),
        ];

        $pemeriksaan_fisik = [
            'asma' => $this->VC(10),
            'bronkitis' => $this->VC(10),
            'pnemonia' => $this->VC(10),
            'tuberkolosis' => $this->VC(10),
            'respirasi_dbn' => $this->VC(10),
            'keterangan_respirasi' => $this->VC(255),
            'echocardiogram' => $this->VC(255),

            'ekg_abnormal' => $this->VC(10),
            'angina' => $this->VC(10),
            'chf' => $this->VC(10),
            'disritmia' => $this->VC(10),
            'hipertensi' => $this->VC(10),
            'murmur' => $this->VC(10),
            'pacemaker' => $this->VC(10),
            'penyakit_katup' => $this->VC(10),
            'card_dbn' => $this->VC(10),
            'keterangan_card' => $this->VC(255),
            'ekg' => $this->VC(255),

            'bowel_obstruction' => $this->VC(10),
            'sirosis' => $this->VC(10),
            'jaundice' => $this->VC(10),
            'nv' => $this->VC(10),
            'hg_dbn' => $this->VC(10),
            'keterangan_hg' => $this->VC(255),
            'pr' => $this->VC(255),

            'cva' => $this->VC(10),
            'sakit_kepala' => $this->VC(10),
            'penurunan_kesadaran' => $this->VC(10),
            'paralis' => $this->VC(10),
            'parastesia' => $this->VC(10),
            'hp' => $this->VC(10),
            'pp' => $this->VC(10),
            'kejang' => $this->VC(10),
            'nd' => $this->VC(10),
            'nm_dbn' => $this->VC(10),
            'keterangan_nm' => $this->VC(255),
            'sb' => $this->VC(255),

            'dm' => $this->VC(10),
            'gg' => $this->VC(10),
            'thyroid' => $this->VC(10),
            're_dbn' => $this->VC(10),
            'keterangan_re' => $this->VC(255),
            'pp_lain' => $this->VC(255),

            'anemia' => $this->VC(10),
            'kanker' => $this->VC(10),
            'kemoterapi' => $this->VC(10),
            'dehidrasi' => $this->VC(10),
            'hemofilia' => $this->VC(10),
            'hamil' => $this->VC(10),
            'o_dbn' => $this->VC(10),
            'keterangan_o' => $this->VC(255),
            'asa' => $this->VC(5),
        ];

        $pemeriksaan_lab = [
            'hbhct' => $this->VC(50),
            'ureum' => $this->VC(50),
            'creatinin' => $this->VC(50),
            'sgot' => $this->VC(50),
            'sgpt' => $this->VC(50),
            'albumin' => $this->VC(50),
            'globulin' => $this->VC(50),
            'bilirubin' => $this->VC(50),
            'direct' => $this->VC(50),
            'indirect' => $this->VC(50),
            'na' => $this->VC(50),
            'k' => $this->VC(50),
            'ci' => $this->VC(50),
            'ca' => $this->VC(50),
            'mg' => $this->VC(50),
            'lab_lain' => $this->VC(50),
            'kesimpulan' => $this->VC(255),
        ];

        $INSTRUKSIPRAANESTESI = [
            'puasa' => $this->VC(50),
            'makanan_padat' => $this->VC(50),
            'makanan_cair' => $this->VC(50),
            'obat_diberikan' => $this->VC(50),
            'obat_dihentikan' => $this->VC(50),
            'rencana' => $this->VC(50),
        ];

        $ttd = [
            'dokter' => $this->VC(100),
        ];

        $this->forge->addField(array_merge($bio, $alergiObat, $baris3, $baris4, $pemeriksaan_fisik, $pemeriksaan_lab, $INSTRUKSIPRAANESTESI, $ttd));
        $this->forge->addPrimaryKey('id');

        $this->forge->createTable('form6');
    }

    public function down()
    {
        $this->forge->dropTable('form6');
    }
    private function VC($constraint)
    {
        return [
            'type' => 'VARCHAR',
            'constraint' => $constraint,
        ];
    }
}
