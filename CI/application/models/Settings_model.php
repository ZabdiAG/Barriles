<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 12:48 PM
 */
class Settings_model extends CI_Model
{
    /*
     * siguienteBorradoRegistros    datetime
     * turnoActual                  char 1
     */

    public function __construct(){
        parent::__construct();
    }
    public function getAll(){
        $result = Array();
        $query= $this->db->get('settings');
        foreach($query->result() as $row){
            $result[] = $row;
        }
        return $result;
    }
    public function add($arg){
        $this->db->insert('settings',$arg);
    }
}