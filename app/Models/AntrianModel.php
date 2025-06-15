<?php

namespace App\Models;

use CodeIgniter\Model;

class AntrianModel extends Model
{
    protected $table = 'antrian';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nomor_antrian', 'nama_pengunjung', 'id_pelayanan', 'id_loket', 'waktu'];
    protected $useTimestamps = false;
}
