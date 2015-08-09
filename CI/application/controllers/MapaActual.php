<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 02:17 AM
 */
class MapaActual extends CI_Controller
{
    public function index(){
        $this->load->model('Mapaactual_model');
        $arg['data']= $this->Mapaactual_model->getAll();
        $this->load->view('header');
        $this->load->view('mapaactual/index',$arg);
        $this->load->view('footer');
    }

    public function add(){
        $this->load->model('Mapaactual_model');
        $this->Mapaactual_model->add($_POST);

    }

}