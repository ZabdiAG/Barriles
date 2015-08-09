<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 02:57 PM
 */
class Uom_model extends CI_Model
{
    /*
     * partNumber   varchar 10
     * uom          varchar 10
     */

    public function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $result = Array();
        $query= $this->db->get('uom');
        foreach($query->result() as $row){
            $result[] = $row;
        }
        return $result;
    }
    public function add($arg){
        $this->db->insert('uom',$arg);
    }
}