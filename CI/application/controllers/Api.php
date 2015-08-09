<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 3/08/15
 * Time: 05:09 PM
 */
class Api extends CI_Controller
{
    public function index(){
        $this->load->model('Api_model');
        $arg['data']= $this->Api_model->getAll();
        $this->load->view('header');
        $this->load->view('api/index',$arg);
        $this->load->view('footer');
    }

    public function add(){
        $this->load->model('Api_model');
        $this->Api_model->add($_POST);
        
    }
}