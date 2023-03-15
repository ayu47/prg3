<?php namespace App\Models;
use CodeIgniter\Model;

class PenggunaModel extends Model
{
	/**
	* table name
	*/
	protected $table = "pengguna";
	/**
	* allowed field
	*/
	protected $allowedFields = [
			'id_pengguna',
			'email',
			'nama',
			'verifikasi'
	];
	
	public function getPengguna()
	{
		return $this->findAll(); 
	}
}
?>