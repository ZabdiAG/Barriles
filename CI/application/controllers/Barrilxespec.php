<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 04:03 PM
 */
class Barrilxespec extends CI_Controller
{
    public function index(){
        $this->load->model('Barrilxespec_model');
        $arg['data']= $this->Barrilxespec_model->getAll();
        $this->load->view('header');
        $this->load->view('barrilxespec/index',$arg);
        $this->load->view('footer');
    }

    public function add(){
        $this->load->model('Barrilxespec_model');
        $this->Barrilxespec_model->add($_POST);
    }
}