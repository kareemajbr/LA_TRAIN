<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $table = 'jadwal_kereta'; // Table name
    protected $allowedFields = ['kode_kereta', 'stasiun_awal', 'destinasi_stasiun', 'jam_berangkat', 'jam_tiba'];

    public function getJadwalByDestination($destination)
    {
        // Query the database to fetch data based on the selected destination
        return $this->where('destinasi_stasiun', $destination)->findAll();
    }
}
