<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
 	class Verifylogin extends CI_Controller {
	
		public function index(){
			redirect('view_login','refresh');
			/*
			$this->load->view('login_fail');
			
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username','Username','trim|required|xss_clean');
			$this->form_validation->set_rules('password','Password','trim|required|xss_clean|callback_check_database');

			if($this->form_validation->run() == false){
				$this->load->view('login_fail');
			}else{
				redirect('home');
			}

			*/
		}
			/*
		public function check_database($password){
			$username = $this->input->post('username');
			$this->load->model('Users','users');
			$result = $this->users->login($username, $password);

			if($result){
				$sess_array = array();
				foreach ($result as $row) {
					$sess_array = array(
						'id' => $row->id,
						'username' => $row->username
					 );
					$this->session->set_userdata('logged_in', $sess_array);
				}
				return true;
			}else{
				$this->form_validation->set_message('check_database', 'Usuario o Contrasena incorrectos.');
				return false;
			}
		}

		*/
	}

?>