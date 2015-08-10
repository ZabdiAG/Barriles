<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 10:08 PM
 */
class Detallemaestro_model extends CI_Model
{

    /*
     * idDetalleMaestro     int
     * tipoMovimiento       varchar 10
     * fecha                datetime
     * pesoActual           decimal 18 2
     * consumoKg            decimal 18 2
     * consumoLongitud      decimal 18 3
     * localizacion         varchar 10
     * gafete               varchar 50
     * idMaestroSerie       int
     */
    public function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $result = Array();
        $query= $this->db->get('detallemaestro');
        foreach($query->result() as $row){
            $result[] = $row;
        }
        return $result;
    }
    public function add($arg){
        $this->db->insert('detallemaestro',$arg);
    }
}