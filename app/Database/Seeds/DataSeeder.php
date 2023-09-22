<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 2,
                'nama' => '2.pdf',
                'hal' => 2,
                'status' => 1,
                'form' => 0,
            ],
            [
                'id' => 3,
                'nama' => '3.pdf',
                'hal' => 2,
                'status' => 1,
                'form' => 0,
            ],
            [
                'id' => 4,
                'nama' => '4.pdf',
                'hal' => 2,
                'status' => 1,
                'form' => 0,
            ],
            [
                'id' => 6,
                'nama' => '6.pdf',
                'hal' => 1,
                'status' => 1,
                'form' => 0,
            ],
            [
                'id' => 7,
                'nama' => '7.pdf',
                'hal' => 1,
                'status' => 1,
                'form' => 0,
            ],
            [
                'id' => 8,
                'nama' => '8.pdf',
                'hal' => 1,
                'status' => 1,
                'form' => 0,
            ],
            [
                'id' => 9,
                'nama' => '9.pdf',
                'hal' => 2,
                'status' => 1,
                'form' => 0,
            ],
        ];

        // Using Query Builder to insert data
        $this->db->table('data')->insertBatch($data);
    }
}
