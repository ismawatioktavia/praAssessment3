<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PaketSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'tanggal_datang'    => '2021-06-18 23:55:35',
                'id_penghuni'       => '1',
                'NIP'               => '1234',
                'isi_paket'         => 'Pakaian',
                'tanggal_ambil'     => '2021-06-19 23:55:35'
            ],
            [
                'tanggal_datang'    => '2021-06-18 23:55:35',
                'id_penghuni'       => '2',
                'NIP'               => '1234',
                'isi_paket'         => 'Elektronik',
                'tanggal_ambil'     => '2021-06-19 23:55:35'
            ],
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO karyawan (NIP, nama) VALUES(:NIP:, :nama:)", $data);

        // Using Query Builder
        // $this->db->table('karyawan')->insert($data);
        $this->db->table('paket')->insertBatch($data);
    }
}
