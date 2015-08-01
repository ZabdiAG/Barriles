<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Home extends CI_Controller{
		public function index(){
			$this->load->view('view_principal');
			/*
			if($this->session->userdate('logged_in')){
				$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
				
				//$this->load->view('view_principal',$data);
			}else{
				
				//redirect('view_login','refresh');
			}
*/
		}

		public function logout(){
			$this->session->unset_userdata('logged_in');
			session_destroy();
			redirect('view_login',);
		}


	} 



?>