<?php

namespace App\Controllers;
use CodeIgniter\Controller;
class Products extends BaseController {
    public function details($id) {
        $data['id'] = $id;
        echo view('templates/header.php');
        echo view('pages/products', $data);
        echo view('templates/footer.php');
    }
}
