<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 12:31 AM
 */
class Histseries_model extends CI_Model
{
    /*
     * idHistSeries
     * serie
     * partNumber
     * locActual
     * stdPack
     * estacion
     * status
     * fechaAlta
     */


    public function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $result = Array();
        $query= $this->db->get('histseries');
        foreach($query->result() as $row){
            $result[] = $row;
        }
        return $result;
    }
    public function add($arg){
        $this->db->insert('histseries',$arg);
    }
}