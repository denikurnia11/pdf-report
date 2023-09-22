<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Form3 extends Migration
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
            'kebiasaan_periksa' => $this->VC(100),
            'presepsi' => $this->VC(100),
            'hb' => $this->VC(100),
            'tgl_hb' => ['type' => 'DATE'],
            'albumin' => $this->VC(100),
            'tgl_albumin' => ['type' => 'DATE'],
            'protein' => $this->VC(100),
            'tgl_protein' => ['type' => 'DATE'],
        ];
        $tandaKlinis = [
            'pucat' => $this->VC(20),
            'membrane_mukosa' => $this->VC(20),
            'conjunctiva' => $this->VC(20),
            'kulit' => $this->VC(100),
            'turgor' => $this->VC(100),
        ];
        $riwayatNutrisi = [
            'riwayat_nutrisi' => $this->VC(100),
            'porsi_makan' => $this->VC(100),
            'diet' => $this->VC(100),
            'jenis_diet' => $this->VC(100),
            'jenis_diet_lain' => $this->VC(100),
            'kalori' => $this->VC(100),
            'asi' => $this->VC(100),
            'frekuensi_asi' => $this->VC(100),
            'asb' => $this->VC(100),
            'frekuensi_asb' => $this->VC(100),
            'ukuran_asb' => $this->VC(100),
            'ngt' => $this->VC(100),
            'terpasang_ngt' => $this->VC(100),
            'tujuan_ngt' => $this->VC(100),
            'jumlah_minum_ngt' => $this->VC(100),
        ];
        $polaEliminasi = [
            'bab' => $this->VC(100),
            'konsistensi' => $this->VC(100),
            'warna' => $this->VC(100),
            'keluhan' => $this->VC(100),
            'peristaltik_usus' => $this->VC(100),
            'flatus' => $this->VC(100),
            'bak' => $this->VC(100),
            'jenis_bak' => $this->VC(100),
            'jumlah_bak' => $this->VC(100),
            'warna_urine' => $this->VC(100),
            'terpasang_kateter' => $this->VC(100),
            'hari_kateter' => $this->VC(100),
        ];
        $polaIstirahatTidur = [
            'jam_tidur_malam' => $this->VC(100),
            'insomnia' => $this->VC(20),
            'jam_tidur_siang' => $this->VC(100),
            'konsumsi_obat' => $this->VC(20),
            'nama_obat' => $this->VC(100),
        ];
        $polaToleransiKopingStres = [
            'koping' => $this->VC(100),
            'penyelesaian_masalah' => $this->VC(100),
        ];
        $polaHubunganPeran = [
            'hubungan_orang' => $this->VC(100),
            'peran_dikeluarga' => $this->VC(100),
            'peran_lain' => $this->VC(100),
            'peran_selama_sakit' => $this->VC(100),
        ];
        $polaSeksualReproduksi = [
            'jumlah_anak' => $this->VC(100),
            'menikah_umur' => $this->VC(100),
            'anak_pertama' => $this->VC(100),
            'penyakit_kelamin' => $this->VC(100),
            'jenis_keluhan' => $this->VC(100),
        ];
        $polaNilaiKepercayaan = [
            'ibadah' => $this->VC(100),
        ];

        // Page 2
        $riwayatMenstruasi = [
            'menarche' => $this->VC(20),
            'hpht' => $this->VC(100),
            'hpl' => $this->VC(100),
            'jenis_menstruasi' => $this->VC(100),
        ];
        $perkawinan = [
            'status_perkawinan' => $this->VC(100),
            'perkawinan_ke' => $this->VC(100),
            'menikah_umur_2' => $this->VC(100),
        ];
        $riwayatKehamilanPersalinanNifas = [
            'g' => $this->VC(100),
            'p' => $this->VC(100),
            'ab' => $this->VC(100),
            'ah' => $this->VC(100),
            'anc' => $this->VC(100),
            'x' => $this->VC(100),
            'imunisasi' => $this->VC(100),
        ];
        $riwayatHamil = [
            'hamil_muda' => $this->VC(100),
            'hamil_muda_lain' => $this->VC(100),
            'hamil_tua' => $this->VC(100),
            'hamil_tua_lain' => $this->VC(100),
        ];
        $riwayatPenyakit = [
            'pernah_dirawat' => $this->VC(100),
            'tempat_pernah_dirawat' => $this->VC(100),
            'operasi' => $this->VC(100),
            'tempat_operasi' => $this->VC(100),
            'riwayat_penyakit_keluarga' => $this->VC(100),
            'riwayat_penyakit_gynecologi' => $this->VC(100),
        ];
        $riwayatKB = [
            'jenis_kb' => $this->VC(100),
            'lama_pemakaian_kb' => $this->VC(100),
            'keluhan_kb' => $this->VC(100),
        ];
        $nutrisiEliminasiIstirahatTerakhir = [
            'makan' => ['type' => 'DATETIME'],
            'minum' => ['type' => 'DATETIME'],
            'tidur' => ['type' => 'INT', 'constraint' => 11],
        ];
        $psikososial = [
            'penerimaan_klien' => $this->VC(100),
            'support' => $this->VC(100),
        ];

        $inspeksi = [
            'inspeksi' => $this->VC(100),
            'inspeksi_lain' => $this->VC(100),
            'let_punggung' => $this->VC(100),
            'presentasi' => $this->VC(100),
            'presentasi_lain' => $this->VC(100),
            'tbj' => $this->VC(100),
            'auskultasi' => $this->VC(100),
            'djj' => $this->VC(100),
            'bagian_terendah' => $this->VC(100),
            'his' => $this->VC(100),
            'durasi' => $this->VC(100),
            'interisitas' => $this->VC(100),
            'vaginam' => $this->VC(100),
            'jumlah' => $this->VC(100),
            'jumlah_lain' => $this->VC(100),
            'inspekulo' => $this->VC(100),
            'portio' => $this->VC(100),
            'vagina_toucher' => $this->VC(100),
        ];
        $nifas = [
            'nifas_tfu' => $this->VC(100),
            'kontraksi_uterus' => $this->VC(20),
            'nifas_pengeluaran_pervaginam' => $this->VC(20),
            'nifas_darah' => $this->VC(20),
            'lochea_nifas' => $this->VC(20),
            'luka_jalan' => $this->VC(20),
            'derajat_luka' => $this->VC(10),
            'derajat_luka_lain' => $this->VC(20),
            'luka_post' => $this->VC(10),
        ];

        // ANALISA MASALAH KEPERAWATAN KEBIDANAN
        $amkk = [
            'checkbox1' => $this->VC(5),
            'checkbox2' => $this->VC(5),
            'checkbox3' => $this->VC(5),
            'checkbox4' => $this->VC(5),
            'checkbox5' => $this->VC(5),
            'checkbox6' => $this->VC(5),
            'checkbox7' => $this->VC(5),
            'checkbox8' => $this->VC(5),
            'checkbox9' => $this->VC(5),
            'checkbox10' => $this->VC(5),
            'checkbox11' => $this->VC(5),
            'checkbox12' => $this->VC(5),
            'checkbox13' => $this->VC(5),
            'checkbox14' => $this->VC(5),
            'checkbox15' => $this->VC(5),
            'checkbox16' => $this->VC(5),
            'checkbox17' => $this->VC(5),
            'checkbox18' => $this->VC(5),
            'checkbox19' => $this->VC(5),
            'checkbox20' => $this->VC(5),
            'checkbox21' => $this->VC(5),
            'checkbox22' => $this->VC(5),
            'checkbox23' => $this->VC(5),
            'checkbox24' => $this->VC(5),
            'checkbox25' => $this->VC(5),
            'checkbox26' => $this->VC(5),
            'checkbox27' => $this->VC(5),
            'checkbox28' => $this->VC(5),
            'checkbox29' => $this->VC(5),
            'checkbox30' => $this->VC(5),
            'checkbox31' => $this->VC(5),
        ];
        $diagnosaKebidanan = [
            'diagnosa_kebidanan' => $this->VC(5),
            'uraian_diagnosa' => $this->VC(255),
            'lain_lain' => $this->VC(5),
            'uraian' => $this->VC(255),
        ];

        // RENCANA KEPERAWATAN INTERDISIPLIN
        $rki = [
            'dn' => $this->VC(5),
            'uraian_dn' => $this->VC(255),
            'rm' => $this->VC(5),
            'uraian_rm' => $this->VC(255),
            'far' => $this->VC(5),
            'uraian_far' => $this->VC(255),
            'roh' => $this->VC(5),
            'uraian_roh' => $this->VC(255),
            'psi' => $this->VC(5),
            'uraian_psi' => $this->VC(255),
            'll' => $this->VC(5),
            'uraian_ll' => $this->VC(255),
        ];


        $this->forge->addField(array_merge($bio, $tandaKlinis, $riwayatNutrisi, $polaEliminasi, $polaIstirahatTidur, $polaToleransiKopingStres, $polaHubunganPeran, $polaSeksualReproduksi, $polaNilaiKepercayaan, $riwayatMenstruasi, $perkawinan, $riwayatKehamilanPersalinanNifas, $riwayatHamil, $riwayatPenyakit, $riwayatKB, $nutrisiEliminasiIstirahatTerakhir, $psikososial, $inspeksi, $nifas, $amkk, $diagnosaKebidanan, $rki));

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('form3');
    }

    public function down()
    {
        $this->forge->dropTable('form3');
    }

    private function VC($constraint)
    {
        return [
            'type' => 'VARCHAR',
            'constraint' => $constraint,
        ];
    }
}
