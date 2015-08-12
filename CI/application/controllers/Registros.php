<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 10/08/15
 * Time: 02:29 PM
 */
class Registros extends CI_Controller
{
    public function index(){
        $this->load->model('Registros_model');
        $this->load->model('Usuarios_model');
        $this->load->model('Rutas_model');
        $arg['data']= $this->Registros_model->getAll();
        $arg['usuarios'] =$this->Usuarios_model->getAll();
        $arg['rutas'] =$this->Rutas_model->getAll();
        $this->load->view('header');
        $this->load->view('registros/index',$arg);
        $this->load->view('footer');
    }
    public function add(){
        $this->load->model('Registros_model');
        $this->Registros_model->add($_POST);
    }
}