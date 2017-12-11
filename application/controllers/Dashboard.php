<?php

	defined('BASEPATH') OR exit ('No direct script access allowed');

	class Dashboard extends CI_Controller{

		function __construct(){

			parent::__construct();
			$this->load->model('m_login');
			$this->load->model('m_jurusan');
			
		}

		function index(){
			$user_akun = $this->m_login->ambil_user($this->session->userdata('username'));
			$session = $this->session->userdata('login_in');

			$data['user'] = $user_akun;

			if($session == TRUE){
				$this->load->view('header');
				$this->load->view('session-login', $data);
				$this->load->view('footer');
			}
			else{
				redirect('session', 'refresh');
			}
		}

		function beranda(){
			$user_akun = $this->m_login->ambil_user($this->session->userdata('username'));
			$session = $this->session->userdata('login_in');

			$data['user'] = $user_akun;

			if($session == TRUE){
				$this->load->view('header');
				$this->load->view('nav-admin', $data);
				$this->load->view('footer');
			}
			else{
				redirect('session', 'refresh');
			}
		}

		function jurusan(){

			$data['data_admin'] = $this->m_jurusan->select();

			$user_akun = $this->m_login->ambil_user($this->session->userdata('username'));

			$session = $this->session->userdata('login_in');

			$data['user'] = $user_akun;

			if ($session == TRUE){
				$this->load->view('header');
				$this->load->view('nav-admin', $data);
				$this->load->view('data-jurusan', $data);
				$this->load->view('footer');
			}
			else{
				redirect('session', 'refresh');
			}
		}

		function tambahJurusan(){

			$data['data_admin'] = $this->m_jurusan->select();
					$data = array(
						'id_admin' => $this->input->post('id_admin'),
						'nama' => $this->input->post('nama'),
						'password' => $this->input->post('password')
					);

					$this->m_jurusan->insert($data);

					redirect('beranda/jurusan', 'refresh');
		}

		function logout(){
			$this->session->sess_destroy();
			redirect('session', 'refresh');
		}
	}

?>