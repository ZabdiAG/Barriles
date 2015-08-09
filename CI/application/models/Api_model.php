<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 5/08/15
 * Time: 05:57 PM
 */
class Api_model extends CI_Model
{
    /*atributes
    idApi
    serie
    partNumber
    totalWeight
    taraWeight
    totalLenght
    unit
    date

    */

    public function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $result = Array();
        $query= $this->db->get('api');
        foreach($query->result() as $row){
            $result[] = $row;
        }
        return $result;
    }
    public function add($arg){
        $this->db->insert('api',$arg);
    }
}