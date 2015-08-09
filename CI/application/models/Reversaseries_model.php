<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 01:43 PM
 */
class Reversaseries_model extends CI_Model
{
    //todo check relationship between uom and reversaseries tables
    /*
     * Attributes:
     *
     *idReversaSerie        int
     * serie                varchar 17
     * partNumber           varchar 10
     * slocInicial          varchar 4
     * slocDestino          varchar 4
     * quantity             decimal 18 3
     * uom                  char 3
     * dateTransfer         datetime
     * isTranfer            tinyiny
     * documentNumber       varchar 50
     */
    public function __construct(){
        parent::__construct();
    }
    public function getAll(){
        $result = Array();
        $query= $this->db->get('reversaseries');
        foreach($query->result() as $row){
            $result[] = $row;
        }
        return $result;
    }
    public function add($arg){
        $this->db->insert('reversaseries',$arg);
    }
}