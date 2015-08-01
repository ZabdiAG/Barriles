<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Home extends CI_Controller{
		public function index(){
			if($this->session->userdate('logged_in')){
				$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
				$this->load->view('principal',$data);
			}else{
				redirect('login','refresh');
			}

		}

		public function logout(){
			$this->session->unset_userdata('logged_in');
			session_destroy();
			redirect('login',);
		}


	} 



?>