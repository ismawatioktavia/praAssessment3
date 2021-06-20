<?php

namespace App\Models;

use App\Database\Migrations\Karyawan;
use CodeIgniter\Model;

class PaketModel extends Model
{
    protected $table = 'paket';
    protected $primaryKey = 'id_paket';
    protected $useTimestamps = true;
    protected $allowedFields = ['tanggal_datang', 'id_penghuni', 'NIP', 'isi_paket', 'tanggal_ambil'];
}
