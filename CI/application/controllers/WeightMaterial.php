<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 01:22 PM
 */
class WeightMaterial extends CI_Controller
{
    public function index(){
        $this->load->model('Weightmaterial_model');
        $arg['data']= $this->Weightmaterial_model->getAll();
        $this->load->view('header');
        $this->load->view('weightmaterial/index',$arg);
        $this->load->view('footer');
    }

    public function add(){
        $this->load->model('Weightmaterial_model');
        $this->Weightmaterial_model->add($_POST);

    }
}