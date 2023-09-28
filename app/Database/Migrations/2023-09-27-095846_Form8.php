<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Form8 extends Migration
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
            'umur' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'nik' => $this->VC(100),
        ];

        $diagnosa = [
            'pre' => $this->VC(100),
            'post' => $this->VC(100),
            'tindakan_operasi' => $this->VC(100),
            'jenis_anestesi' => $this->VC(100),
        ];

        $subyektif = [
            'jam1' => $this->VC(100),
            'nama1' => $this->VC(100),
            's1' => $this->VC(10),
            's2' => $this->VC(10),
            's3' => $this->VC(10),
            's4' => $this->VC(10),
            's5' => $this->VC(10),
            's6' => $this->VC(10),
            's7' => $this->VC(10),
            's1_lain' => $this->VC(100),
            's2_lain' => $this->VC(100),
            's3_lain' => $this->VC(100),
            's4_lain' => $this->VC(100),
        ];

        $obyektif = [
            'jam2' => $this->VC(100),
            'nama2' => $this->VC(100),
            'o1' => $this->VC(10),
            'o2' => $this->VC(10),
            'o3' => $this->VC(10),
            'o4' => $this->VC(10),
            'o5' => $this->VC(10),
            'o6' => $this->VC(10),
            'o7' => $this->VC(10),
            'o8' => $this->VC(10),
            'o9' => $this->VC(10),
            'o10' => $this->VC(10),
            'o11' => $this->VC(10),
            'o12' => $this->VC(10),
            'o13' => $this->VC(10),
            'o14' => $this->VC(10),
            'o15' => $this->VC(10),
            'o16' => $this->VC(10),
            'o17' => $this->VC(10),
            'o18' => $this->VC(10),
            'o19' => $this->VC(10),
            'o20' => $this->VC(10),
            'o21' => $this->VC(10),
            'o22' => $this->VC(10),
            'o23' => $this->VC(10),
            'o24' => $this->VC(10),
            'o25' => $this->VC(10),
            'o26' => $this->VC(10),
            'o27' => $this->VC(10),
            'o28' => $this->VC(10),
            'o29' => $this->VC(10),
            'o30' => $this->VC(10),
        ];

        $premidikassi = [
            'premidikassi' => $this->VC(100),
            'jam_premidikassi' => $this->VC(100),
            'premidikassi2' => $this->VC(100),
            'jam_premidikassi2' => $this->VC(100),
            'propolaksis' => $this->VC(100),
            'jam_propolaksis' => $this->VC(100),
            'p1' => $this->VC(10),
            'p2' => $this->VC(10),
            'p3' => $this->VC(10),
            'p4' => $this->VC(10),
            'p5' => $this->VC(10),
            'p6' => $this->VC(10),
            'p7' => $this->VC(10),
            'p8' => $this->VC(10),
            'p9' => $this->VC(10),
            'p10' => $this->VC(10),
            'p11' => $this->VC(10),
            'p12' => $this->VC(10),
            'p13' => $this->VC(10),
            'p14' => $this->VC(10),
            'p15' => $this->VC(10),
            'p16' => $this->VC(10),
            'p17' => $this->VC(10),
            'p18' => $this->VC(10),
            'p19' => $this->VC(10),
            'p20' => $this->VC(10),
            'p21' => $this->VC(10),
            'p22' => $this->VC(10),
            'p23' => $this->VC(10),
            'p24' => $this->VC(10),
            'p25' => $this->VC(10),
            'p26' => $this->VC(10),
            'p1_lain' => $this->VC(100),
            'p2_lain' => $this->VC(100),
            'td' => $this->VC(20),
            'c' => $this->VC(20),
            'rp' => $this->VC(20),
            'nadi' => $this->VC(20),
            'luka' => $this->VC(20),
            'pendarahan' => $this->VC(20),
            'urine' => $this->VC(20),
            'lama_op' => $this->VC(20),

            'p27' => $this->VC(10),
            'p28' => $this->VC(10),
            'p29' => $this->VC(10),
            'p30' => $this->VC(10),
            'p31' => $this->VC(10),
            'p32' => $this->VC(10),

            'ttv' => $this->VC(20),
            'td2' => $this->VC(20),
            'nadi2' => $this->VC(20),
            'nafas' => $this->VC(20),
            'suhu' => $this->VC(20),
        ];

        $as = [
            'jam3' => $this->VC(100),
            'nama3' => $this->VC(100),
            'soal1' => $this->VC(100),
            'score1' => $this->VC(10),
            'soal2' => $this->VC(100),
            'score2' => $this->VC(10),
            'soal3' => $this->VC(100),
            'score3' => $this->VC(10),
            'soal4' => $this->VC(100),
            'score4' => $this->VC(10),
            'soal5' => $this->VC(100),
            'score5' => $this->VC(10),
            'soal6' => $this->VC(100),
            'score6' => $this->VC(10),
            'soal7' => $this->VC(100),
            'score7' => $this->VC(10),
            'soal8' => $this->VC(100),
            'score8' => $this->VC(10),
            'soal9' => $this->VC(100),
            'score9' => $this->VC(10),
        ];

        $diagnosaRencana = [
            'd1' => $this->VC(10),
            'r1' => $this->VC(10),
            'w1' => ['type' => 'DATE'],
            'd2' => $this->VC(10),
            'r2' => $this->VC(10),
            'w2' => ['type' => 'DATE'],
            'd3' => $this->VC(10),
            'r3' => $this->VC(10),
            'w3' => ['type' => 'DATE'],
            'd4' => $this->VC(10),
            'r4' => $this->VC(10),
            'w4' => ['type' => 'DATE'],
            'd5' => $this->VC(10),
            'r5' => $this->VC(10),
            'w5' => ['type' => 'DATE'],
            'd6' => $this->VC(10),
            'r6' => $this->VC(10),
            'w6' => ['type' => 'DATE'],
            'd7' => $this->VC(10),
            'r7' => $this->VC(10),
            'w7' => ['type' => 'DATE'],
            'd8' => $this->VC(10),
            'r8' => $this->VC(10),
            'w8' => ['type' => 'DATE'],
            'd9' => $this->VC(10),
            'r9' => $this->VC(10),
            'w9' => ['type' => 'DATE'],
            'd10' => $this->VC(10),
            'r10' => $this->VC(10),
            'w10' => ['type' => 'DATE'],
            'd11' => $this->VC(10),
            'r11' => $this->VC(10),
            'w11' => ['type' => 'DATE'],
            'd12' => $this->VC(10),
            'r12' => $this->VC(10),
            'w12' => ['type' => 'DATE'],
            'd13' => $this->VC(10),
            'r13' => $this->VC(10),
            'w13' => ['type' => 'DATE'],
        ];

        $this->forge->addField(array_merge($bio, $diagnosa, $subyektif, $obyektif, $premidikassi, $as, $diagnosaRencana));
        $this->forge->addPrimaryKey('id');

        $this->forge->createTable('form8');
    }

    public function down()
    {
        $this->forge->dropTable('form8');
    }
    private function VC($constraint)
    {
        return [
            'type' => 'VARCHAR',
            'constraint' => $constraint,
        ];
    }
}
