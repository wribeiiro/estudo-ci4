<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Home extends Controller
{
	public function index()
	{
		$userModel    = new UserModel();
		$data['user'] = $userModel->getUsers();

		echo view('index', $data);
	}
}
