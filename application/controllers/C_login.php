<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function index()
	{
		$data['title'] = 'Login';

		$this->form_validation->set_rules('username','username','trim|required|alpha_numeric_spaces');
		$this->form_validation->set_rules('password','password','trim|required|alpha_numeric_spaces');

		if ($this->form_validation->run() == FALSE) :
			$this->load->view('admin/part/login', $data);
		else :
			$username = htmlspecialchars($this->input->post('username',TRUE));
			$password = htmlspecialchars($this->input->post('password',TRUE));

			$this->cek_login($username, $password);
		endif;
	}

	private function cek_login($username, $password)
	{
		// cek akun di table masyarakat dan petugas berdasarkan username
		$user = $this->db->get_where('Registrasi',['username' => $username])->row_array();
		$admin = $this->db->get_where('Registrasi',['username' => $username])->row_array();

		if ($user == TRUE) :
			// jika akun masyarakat == TRUE
			// cek password
			if (password_verify($password, $user['password'])) :
				// jika password benar
				// maka buat session userdata
				$session = [
					'username' 		=> $user['username'],
				];

				$this->session->set_userdata($session);

				$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
					Login berhasil!
					</div>');

				return redirect('C_user/login');

			else :
				// password salah
				$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
					Username atau Password salah!
					</div>');

				return redirect('C_login');
			endif;

		elseif ($admin == TRUE) :
			// jika akun petugas == TRUE
			// cek password

			if (password_verify($password, $admin['password'])) :
				// jika password benar
				// maka buat session userdata
				$session = [
					'username' 		=> $admin['username'],
					'role'			=> $admin['role'],
				];

				$this->session->set_userdata($session);

				$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
					Login berhasil!
					</div>');

				// cek level petugas
				if ($admin['role'] == 'admin') :
					return redirect('C_admin');
				else :
					// jika level tidak ada maka Logout
					// supaya session di hancurkan
					return redirect('C_login');
				endif;

			else :
				// jika password salah
				$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
					Username atau Password salah!
					</div>');

				return redirect('C_login');
			endif;

		else :
		// tidak ada akun yang di temukan
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				Username atau Password salah! admin
				</div>');
		return redirect('C_login');

		endif;
	}
// register

public function register()
{
	$data['title'] = 'Register';

	$this->form_validation->set_rules('username','Username','trim|required|alpha_numeric_spaces|callback_username_check');
	$this->form_validation->set_rules('nama','Nama','trim|required|alpha_numeric_spaces');
	$this->form_validation->set_rules('email','email','trim|required|alpha_numeric_spaces');
	$this->form_validation->set_rules('password','password','trim|required|alpha_numeric_spaces|min_length[6]|max_length[15]');
	$this->form_validation->set_rules('confr_password','confr_password','trim|required|alpha_numeric_spaces|min_length[6]|max_length[15]');
	if ($this->form_validation->run() == FALSE) :
		$this->load->view('admin/part/registrasi', $data);
	else :
		$params = [
			'username'			=> htmlspecialchars($this->input->post('username',TRUE)),
			'name'			=> htmlspecialchars($this->input->post('name',TRUE)),
			'birth'		=> htmlspecialchars($this->input->post('birth',TRUE)),
			'role'	=> 'user',
			'conf_pass' => password_hash(htmlspecialchars($this->input->post('conf_pass',TRUE)), PASSWORD_DEFAULT),
			'password'		=> password_hash(htmlspecialchars($this->input->post('password',TRUE)), PASSWORD_DEFAULT),
			
		];

		$resp = $this->registrasi->create($params);

		if ($resp) :
			$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
				Register berhasil, Silahkan Login!
				</div>');

			redirect('Auth/LoginController');
		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				Register gagal!
				</div>');

			redirect('Auth/RegisterController');
		endif;

	endif;
}

public function username_check($str = NULL)
{
	if (!empty($str)) :
		$user = $this->db->get_where('registrasi',['username' => $str])->row_array();

		$admin = $this->db->get_where('registrasi',['username' => $str])->row_array();

		if ($user == TRUE OR $admin == TRUE) :

			$this->form_validation->set_message('username_check', 'Username ini sudah terdaftar ada.');

			return FALSE;
		else :
			return TRUE;
		endif;
	else :
		$this->form_validation->set_message('username_check', 'Inputan Kosong');

		return FALSE;
	endif;
}

}

/* End of file LoginController.php */
/* Location: ./application/controllers/Auth/LoginController.php */
