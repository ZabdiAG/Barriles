<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 8/08/15
 * Time: 04:30 AM
 */
class BajasPermitidasLoc2 extends CI_Controller
{
    public function index(){
        $this->load->model('Bajaspermitidasloc2_model');
        $arg['data']= $this->Bajaspermitidasloc2_model->getAll();
        $this->load->view('header');
        $this->load->view('bajaspermiditasloc2/index',$arg);
        $this->load->view('footer');
    }

    public function add(){
        $this->load->model('Bajaspermitidasloc2_model');
        $this->Bajaspermitidasloc2_model->add($_POST);
    }
}