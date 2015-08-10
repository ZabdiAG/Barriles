<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 07:31 PM
 */
class Cortadoras_model extends CI_Model
{
    /*
     * idCortadora          int
     * nombre               varchar 50
     * maximoBarriles       int
     * caminaresEntrada     int
     * caminaresSalida      int
     */


    public function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $result = Array();
        $query= $this->db->get('cortadoras');
        foreach($query->result() as $row){
            $result[] = $row;
        }
        return $result;
    }
    public function add($arg){
        $this->db->insert('cortadoras',$arg);
    }
}