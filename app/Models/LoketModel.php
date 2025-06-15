<?php

namespace App\Models;

use CodeIgniter\Model;

class LoketModel extends Model
{
    protected $table = 'loket';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_loket'];
    protected $useTimestamps = false;
}