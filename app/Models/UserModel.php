<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
	protected $table = 'dadc000';

	public function getUsers() {

		$sql = "SELECT * FROM DADC000";
		$query = $this->db->query($sql);

		return $query->getResult();
	}
}
