<?php namespace App\Controllers;
use CodeIgniter\Controller;
class Home extends BaseController
{
	public function index()
	{
        echo view('templates/header.php');
		echo view('My_homepage.php');
        echo view('templates/footer.php');
	}

	//--------------------------------------------------------------------

}
