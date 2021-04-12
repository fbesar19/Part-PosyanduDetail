<?php

namespace App\Models;

use CodeIgniter\Model;

class BayiModel extends Model
{
    protected $table = 'bayi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'tanggal_lahir'];
}
