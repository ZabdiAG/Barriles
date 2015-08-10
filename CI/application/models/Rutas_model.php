<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 07:41 PM
 */
class Rutas_model extends CI_Model
{

    /*
     * idRuta       int
     * nombre       varchar 50
     * turno        char 1
     */
    public function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $result = Array();
        $query= $this->db->get('rutas');
        foreach($query->result() as $row){
            $result[] = $row;
        }
        return $result;
    }
    public function add($arg){
        $this->db->insert('rutas',$arg);
    }
}