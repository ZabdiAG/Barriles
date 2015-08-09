<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 03:13 AM
 */
class Turnos_model extends CI_Model
{
    /*
     * Atributes:
     * turno            char 1
     * inicioTurno      time 6
     * finTurno         time 6
     */
    public function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $result = Array();
        $query= $this->db->get('turnos');
        foreach($query->result() as $row){
            $result[] = $row;
        }
        return $result;
    }
    public function add($arg){
        $this->db->insert('turnos',$arg);
    }
}