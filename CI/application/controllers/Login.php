<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$this->load->helper(array('form'));
//		$this->load->view('header');
		$this->load->view('login');
//		$this->load->view('footer');
	}
	public function verifyLogin(){
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nombre','Nombre','trim|required|xss_clean');
		$this->form_validation->set_rules('password','Password','trim|required|xss_clean|callback_check_database');

		if($this->form_validation->run() == false){
			$this->load->view('login_fail');
		}else{
			echo "asdasd";
			//redirect('home');
		}
	}

	public function check_database($password){
		$username = $this->input->post('nombre');
		$this->load->model('Users','users');
		$result = $this->users->login($username, $password);

		if($result){
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = array(
					'idUsuario' => $row->id,
					'nombre' => $row->username
				);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return true;
		}else{
			$this->form_validation->set_message('check_database', 'Usuario o Contrasena incorrectos.');
			return false;
		}
	}

}
