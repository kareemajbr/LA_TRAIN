<?php

namespace App\Controllers;

use App\Models\JadwalModel;
use CodeIgniter\Controller;

class Jadwal extends Controller {
    public function kereta()
    {
        return view('jadwal');
    }

    public function fetchData()
    {
        $selectedDestination = $this->request->getPost('destination');

        // Fetch data from the database based on the selected destination
        $jadwalModel = new JadwalModel();
        $data = $jadwalModel->getJadwalByDestination($selectedDestination);

        // Return the data as a JSON response
        return $this->response->setJSON($data);
    }
}
