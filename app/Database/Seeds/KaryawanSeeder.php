<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'NIP'     => '1234',
            'nama'    => 'Ismawati Oktavia'
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO karyawan (NIP, nama) VALUES(:NIP:, :nama:)", $data);

        // Using Query Builder
        $this->db->table('karyawan')->insert($data);
    }
}
