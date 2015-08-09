<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 12:29 AM
 */
class HistSeries extends CI_Controller
{

    public function index(){
        $this->load->model('Histseries_model');
        $arg['data']= $this->Histseries_model->getAll();
        $this->load->view('header');
        $this->load->view('histseries/index',$arg);
        $this->load->view('footer');
    }

    public function add(){
        $this->load->model('Histseries_model');
        $this->Histseries_model->add($_POST);
    }
}