<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenghuniSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'    => 'Ismawati Oktavia',
                'unit'    => 'B',
                'no_ktp'  => '90019',
                'foto'    => 'via.JPG'
            ],
            [
                'nama'    => 'Oktavia',
                'unit'    => 'F',
                'no_ktp'  => '90047',
                'foto'    => 'foto.JPG'
            ]
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO karyawan (NIP, nama) VALUES(:NIP:, :nama:)", $data);

        // Using Query Builder
        // $this->db->table('karyawan')->insert($data);
        $this->db->table('penghuni')->insertBatch($data);
    }
}
