<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 12:47 PM
 */
class Settings extends CI_Controller
{

    public function index(){
        $this->load->model('Settings_model');
        $arg['data']= $this->Settings_model->getAll();
        $this->load->view('header');
        $this->load->view('settings/index',$arg);
        $this->load->view('footer');
    }

    public function add(){
        $this->load->model('Settings_model');
        $this->Settings_model->add($_POST);

    }

}