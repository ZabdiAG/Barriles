<?php
/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 1/08/15
 * Time: 05:40 AM
 */

class Barrileros extends CI_Controller{
    public function index(){
        $this->load->view('header');
        echo base_url();
        $this->load->view('footer');
    }
}