<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 02:59 PM
 */
class Uom extends CI_Controller
{
    public function index(){
        $this->load->model('Uom_model');
        $arg['data']= $this->Uom_model->getAll();
        $this->load->view('header');
        $this->load->view('uom/index',$arg);
        $this->load->view('footer');
    }

    public function add(){
        $this->load->model('Uom_model');
        $this->Uom_model->add($_POST);

    }
}