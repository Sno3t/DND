<?php

namespace App\Controllers;

class About extends BaseController{
    public function index($arg = ''){
        $data['person'] = [$arg];

        echo view('templates/header.php');
        echo view('pages/about', $data);
        echo view('templates/footer.php');
    }
}

