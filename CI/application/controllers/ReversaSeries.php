<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 01:48 PM
 */
class ReversaSeries extends CI_Controller
{
    public function index(){
        $this->load->model('Reversaseries_model');
        $arg['data']= $this->Reversaseries_model->getAll();
        $this->load->view('header');
        $this->load->view('reversaseries/index',$arg);
        $this->load->view('footer');
    }

    public function add(){
        $this->load->model('Reversaseries_model');
        $this->Reversaseries_model->add($_POST);
    }
}