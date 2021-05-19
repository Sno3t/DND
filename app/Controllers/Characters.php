<?php

namespace App\Controllers;

class Characters extends BaseController{
    public function index($arg = ''){
        $data['person'] = [$arg];

        echo view('templates/header.php');
        echo view('pages/Characters', $data);
        echo view('templates/footer.php');
    }
}

