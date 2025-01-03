<?php

namespace App\Models;

use CodeIgniter\Model;

class MainecoonModel extends Model
{
    protected $table = 'mainecoon';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama', 'harga', 'lokasi', 'deskripsi', 'gambar', 'nomor_whatsapp', 'alamat_google_maps'
    ];
}
?>
