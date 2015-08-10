<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 04:04 PM
 */
class Barrilxespec_model extends CI_Model
{
    /*
     * idTara           varchar 20
     * description      varchar 50
     * categoria        varchar 50
     * peso             decimal 18 2
     */
    public function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $result = Array();
        $query= $this->db->get('barrilxespec');
        foreach($query->result() as $row){
            $result[] = $row;
        }
        return $result;
    }
    public function add($arg){
        $this->db->insert('barrilxespec',$arg);
    }
}