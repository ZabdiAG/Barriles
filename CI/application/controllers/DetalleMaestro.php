<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 10:12 PM
 */
class DetalleMaestro extends CI_Controller
{
    public function index(){
        $this->load->model('Detallemaestro_model');
        $arg['data']= $this->Detallemaestro_model->getAll();
        $this->load->view('header');
        $this->load->view('detallemaestro/index',$arg);
        $this->load->view('footer');
    }

    public function add(){
        $this->load->model('Detallemaestro_model');
        $this->Detallemaestro_model->add($_POST);

    }
}