<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 01:33 PM
 */
class Xlimport4 extends CI_Controller
{

    public function index(){
        $this->load->model('Xlimport4_model');
        $arg['data']= $this->Xlimport4_model->getAll();
        $this->load->view('header');
        $this->load->view('xlimport4/index',$arg);
        $this->load->view('footer');
    }

    public function add(){
        $this->load->model('Xlimport4_model');
        $this->Xlimport4_model->add($_POST);

    }

}