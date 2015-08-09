<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 8/08/15
 * Time: 04:27 AM
 */
class Bajaspermitidasloc2_model extends CI_Model
{
    /*
     * partNumber
    */
    public function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $result = Array();
        $query= $this->db->get('bajaspermitidassloc2');
        foreach($query->result() as $row){
            $result[] = $row;
        }
        return $result;
    }
    public function add($arg){
        $this->db->insert('bajaspermitidassloc2',$arg);
    }
}