<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/part/hd_admin');
        $this->load->view('admin/part/i_admin');
        $this->load->view('admin/part/ft_admin');
	}

	public function m_user()
	{
		$this->load->view('admin/part/hd_admin');
        $this->load->view('admin/m_user');
        $this->load->view('admin/part/ft_admin');
	}

	public function m_tiket()
	{
		$this->load->view('admin/part/hd_admin');
        $this->load->view('admin/m_tiket');
        $this->load->view('admin/part/ft_admin');
	}

	public function m_event()
	{
		$this->load->view('admin/part/hd_admin');
        $this->load->view('admin/m_event');
        $this->load->view('admin/part/ft_admin');
	}

	public function add_user()
	{
		$this->load->view('admin/part/hd_admin');
        $this->load->view('admin/add_user');
        $this->load->view('admin/part/ft_admin');
	}

	public function add_tiket()
	{
		$this->load->view('admin/part/hd_admin');
        $this->load->view('admin/add_tiket');
        $this->load->view('admin/part/ft_admin');
	}

	public function e_user()
	{
		$this->load->view('admin/part/hd_admin');
        $this->load->view('admin/e_user');
        $this->load->view('admin/part/ft_admin');
	}

	public function e_tiket()
	{
		$this->load->view('admin/part/hd_admin');
        $this->load->view('admin/e_tiket');
        $this->load->view('admin/part/ft_admin');
	}

	public function e_event()
	{
		$this->load->view('admin/part/hd_admin');
        $this->load->view('admin/e_event');
        $this->load->view('admin/part/ft_admin');
	}

	public function add_event()
	{
		$this->load->view('admin/part/hd_admin');
        $this->load->view('admin/add_event');
        $this->load->view('admin/part/ft_admin');
	}
}
