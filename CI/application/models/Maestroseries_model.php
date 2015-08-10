<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 08:06 PM
 */
class Maestroseries_model extends CI_Model
{
    /*
     * idMaestroSerie
     * serie
     * partNumber
     * stdPack
     * ubicacion
     * fechaAlta
     * fechaUpdate
     * pesoInicial
     * pesoRestante
     * cantidadRestante
     * pesoContenedor
     */
    public function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $result = Array();
        $query= $this->db->get('maestroseries');
        foreach($query->result() as $row){
            $result[] = $row;
        }
        return $result;
    }
    public function add($arg){
        $this->db->insert('maestroseries',$arg);
    }
}