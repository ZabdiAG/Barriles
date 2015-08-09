<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 03:47 PM
 */
class Barrileros_model extends CI_Model
{
    /*
     *idBarrilero       int
     * nombre           varchar
     * gafete           varchar
     * foto             varchar
     * turno            char
     */

    public function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $result = Array();
        $query= $this->db->get('barrileros');
        foreach($query->result() as $row){
            $result[] = $row;
        }
        return $result;
    }
    public function add($arg){
        $this->db->insert('barrileros',$arg);
    }
}