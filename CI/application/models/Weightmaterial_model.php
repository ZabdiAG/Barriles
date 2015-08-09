<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 01:19 PM
 */
class Weightmaterial_model extends CI_Model
{
    /*
     * atributes:
     *
     * partNumber       varchar 10
     * weightGr         decimal 18 4
     * stdPack          decimal 18 3
     * description      varchar 50
     */

    public function __construct(){
        parent::__construct();
    }
    public function getAll(){
        $result = Array();
        $query= $this->db->get('weightmaterial');
        foreach($query->result() as $row){
            $result[] = $row;
        }
        return $result;
    }
    public function add($arg){
        $this->db->insert('weightmaterial',$arg);
    }
}