<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Model {

	private $table = 'registrasi';
	private $primary_key = 'username';
	
	public function create($data)
	{
		return $this->db->insert($this->table, $data);;
	}

}