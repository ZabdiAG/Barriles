<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 7/08/15
 * Time: 01:48 PM
 */
class Bajas extends CI_Controller
{
    public function index(){
        $this->load->model('Bajas_model');
        $arg['data']= $this->Bajas_model->getAll();
        $this->load->view('header');
        $this->load->view('bajas/index',$arg);
        $this->load->view('footer');
    }
    public function add(){
        $this->load->model('Bajas_model');
        $this->Bajas_model->add($_POST);
    }
}