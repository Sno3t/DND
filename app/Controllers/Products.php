<?php

namespace App\Controllers;
use CodeIgniter\Controller;
class Characters extends BaseController {
    public function details($id) {
        $data['id'] = $id;
        echo view('templates/header.php');
        echo view('pages/Characters', $data);
        echo view('templates/footer.php');
    }
}
