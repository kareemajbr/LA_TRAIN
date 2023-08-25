<?php

namespace App\Controllers;

class Home extends BaseController {
    public function index() {
        $data['title'] = "LA Train | Layanan Kereta Api Lenteng Agung";
        echo view('index', $data);
    }
}