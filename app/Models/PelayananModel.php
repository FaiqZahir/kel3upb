<?php

namespace App\Models;

use CodeIgniter\Model;

class PelayananModel extends Model
{
    protected $table = 'pelayanan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_pelayanan'];
    protected $useTimestamps = false;
}
