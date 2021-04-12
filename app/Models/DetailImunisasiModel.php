<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailImunisasiModel extends Model
{
    protected $table = 'detail_imunisasi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'ket_hadir', 'catatan', 'jadwal_imunisasi'];
}
