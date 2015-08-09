<?php
/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 1/08/15
 * Time: 05:40 AM
 */

class Barrileros extends CI_Controller{
    public function index(){
        $this->load->model('Barrileros_model');
        $arg['data']= $this->Barrileros_model->getAll();
        $this->load->view('header');
        $this->load->view('barrileros/index',$arg);
        $this->load->view('footer');
    }

    public function add(){
        $this->load->model('Barrileros_model');
        $this->Barrileros_model->add($_POST);
    }
}