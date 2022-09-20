<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_user extends CI_Controller
{

	public function index()
	{
		$this->load->view('user/header');
		$this->load->view('user/index');
		$this->load->view('user/footer');
	}

	public function login()
	{
		$this->load->view('user/hd_2');
		$this->load->view('user/index');
		$this->load->view('user/footer');
	}

	public function community()
	{
		$this->load->view('user/hd_2');
		$this->load->view('user/community');
		$this->load->view('user/footer');
	}

	public function cart()
	{
		$this->load->view('user/hd_2');
		$this->load->view('user/cart');
		$this->load->view('user/footer');
	}

	public function profil()
	{
		$this->load->view('user/hd_2');
		$this->load->view('user/profile');
		$this->load->view('user/footer');
	}

	public function order()
	{
		$this->load->view('user/hd_2');
		$this->load->view('user/order');
		$this->load->view('user/footer');
	}

	public function payment()
	{
		$this->load->view('user/hd_2');
		$this->load->view('user/payment');
		$this->load->view('user/footer');
	}
	
}
