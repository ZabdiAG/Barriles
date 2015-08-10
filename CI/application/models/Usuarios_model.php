<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 07:51 PM
 */
class Usuarios_model extends CI_Model
{

    /*
     * idUsuario            int
     * nombre               varchar 50
     * gafete               varchar 20
     * isAdministrador      tinyint
     * password             varchar 50
     */
    public function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $result = Array();
        $query= $this->db->get('usuarios');
        foreach($query->result() as $row){
            $result[] = $row;
        }
        return $result;
    }
    public function add($arg){
        $this->db->insert('usuarios',$arg);
    }
}