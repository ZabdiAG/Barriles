<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 07:49 PM
 */
class Usuarios extends CI_Controller
{

    public function index(){
        $this->load->model('Usuarios_model');
        $arg['data']= $this->Usuarios_model->getAll();
        $this->load->view('header');
        $this->load->view('usuarios/index',$arg);
        $this->load->view('footer');
    }

    public function add(){
        $this->load->model('Usuarios_model');
        $this->Usuarios_model->add($_POST);

    }
}