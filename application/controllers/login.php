<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	// function login(){
	// 	$data['login'] = $this->login_model->ambil_data()->result();
	// 	$this->load->view('login/login.php',$data);
	// }

	public function index(){
		$this->load->view('login/login');
		
	}

	function aksi_login(){
		$nama = $this->input->post('nama');
		$nip = $this->input->post('nip');
		$where = array(
			'nama' => $nama,
			'nip' => md5($nip)
			);
		$cek = $this->login_model->ambil_data("karyawan",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $nama,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url('../admin/admin'));
 
		}else{
			echo "Username dan password salah !";
		}
	}

}
