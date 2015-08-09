<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 03:16 AM
 */
class Turnos extends CI_Controller
{
    public function index(){
        $this->load->model('Turnos_model');
        $arg['data']= $this->Turnos_model->getAll();
        $this->load->view('header');
        $this->load->view('turnos/index',$arg);
        $this->load->view('footer');
    }

    public function add(){
        $this->load->model('Turnos_model');
        $this->Turnos_model->add($_POST);

    }
}