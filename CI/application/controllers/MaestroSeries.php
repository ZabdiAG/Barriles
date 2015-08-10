<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 08:05 PM
 */
class MaestroSeries extends CI_Controller
{
    public function index(){
        $this->load->model('Maestroseries_model');
        $arg['data']= $this->Maestroseries_model->getAll();
        $this->load->view('header');
        $this->load->view('maestroseries/index',$arg);
        $this->load->view('footer');
    }

    public function add(){
        $this->load->model('Maestroseries_model');
        $this->Maestroseries_model->add($_POST);

    }
}