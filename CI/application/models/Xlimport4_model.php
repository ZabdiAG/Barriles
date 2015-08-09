<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 01:31 PM
 */
class Xlimport4_model extends CI_Model
{
    /*
     * Attributes:
     *
     * partNumber   varchar 255
     * Sloc         double
     * stock        double
     */

    public function __construct(){
        parent::__construct();
    }
    public function getAll(){
        $result = Array();
        $query= $this->db->get('xlimport4');
        foreach($query->result() as $row){
            $result[] = $row;
        }
        return $result;
    }
    public function add($arg){
        $this->db->insert('xlimport4',$arg);
    }
}