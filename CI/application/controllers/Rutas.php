<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 07:44 PM
 */
class Rutas extends CI_Controller
{
    public function index(){
        $this->load->model('Rutas_model');
        $arg['data']= $this->Rutas_model->getAll();
        $this->load->view('header');
        $this->load->view('rutas/index',$arg);
        $this->load->view('footer');
    }

    public function add(){
        $this->load->model('Rutas_model');
        $this->Rutas_model->add($_POST);

    }
}