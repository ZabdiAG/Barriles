<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 01:07 PM
 */
class Surtidopend_model extends CI_Model
{
    /*
     * atributes
     * serie
     * fecha
     * isTransSloc
     * gafete
     */
    public function __construct(){
        parent::__construct();
    }
    public function getAll(){
        $result = Array();
        $query= $this->db->get('surtidopend');
        foreach($query->result() as $row){
            $result[] = $row;
        }
        return $result;
    }
    public function add($arg){
        $this->db->insert('surtidopend',$arg);
    }

}