<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 07:33 PM
 */
class Cortadoras extends CI_Controller
{
    public function index(){
        $this->load->model('Cortadoras_model');
        $arg['data']= $this->Cortadoras_model->getAll();
        $this->load->view('header');
        $this->load->view('cortadoras/index',$arg);
        $this->load->view('footer');
    }

    public function add(){
        $this->load->model('Cortadoras_model');
        $this->Cortadoras_model->add($_POST);

    }
}