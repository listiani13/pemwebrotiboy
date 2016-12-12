<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('login/index');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');

		$where = array(
			'username' => $username,
			'pass' => md5($password),
			'id_level' => $level
			);

		$cek = $this->m_login->cek_login("login",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'level' => $level,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect("Admin");

		}else{
			echo "Username/password/level salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}

}