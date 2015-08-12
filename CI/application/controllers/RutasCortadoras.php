<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 11/08/15
 * Time: 09:50 PM
 */
class RutasCortadoras extends CI_Controller
{
    public function index(){
        $this->load->model('Rutascortadoras_model');
        $this->load->model('Cortadoras_model');
        $this->load->model('Rutas_model');
        $arg['data'] = $this->Rutascortadoras_model->getAll();
        $arg['rutas'] = $this->Rutas_model->getAll();
        $arg['cortadoras'] = $this->Cortadoras_model->getAll();
        $this->load->view('header');
        $this->load->view('rutascortadoras/index');
        $this->load->view('footer');
    }
    public function add(){
        $this->load->model('Rutascortadoras_model');
        $this->Rutascortadoras_model->add($_POST);
    }
}