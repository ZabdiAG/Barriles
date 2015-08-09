<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 7/08/15
 * Time: 01:42 PM
 */
class DetalleMaestro_model extends CI_Model
{
    public function __construct(){
        parent::__construct();
    }
    public function getAll(){
        $result = Array();
        $query= $this->db->get('detallemaestro');
        foreach($query->result() as $row){
            $result[] = $row;
        }
        return $result;
    }
    public function add($arg){
        $this->db->insert('detallemaestro',$arg);
    }
}