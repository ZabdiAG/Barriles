<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 01:09 PM
 */
class SurtidoPend extends CI_Controller
{

    public function index(){
        $this->load->model('Surtidopend_model');
        $arg['data']= $this->Surtidopend_model->getAll();
        $this->load->view('header');
        $this->load->view('surtidopend/index',$arg);
        $this->load->view('footer');
    }

    public function add(){
        $this->load->model('Surtidopend_model');
        $this->Surtidopend_model->add($_POST);

    }
}