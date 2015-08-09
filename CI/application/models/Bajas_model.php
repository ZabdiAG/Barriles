<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 7/08/15
 * Time: 01:40 PM
 */
class Bajas_model extends CI_Model
{
    /*
     * idBaja
     * slocInicial
     * slocDestino
     * isBajaSAP
     * idDetalleMaestro
     * dateBaja
     * documento
     * ajusteCantidad
     */

    public function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $result = Array();
        $query= $this->db->query('
            SELECT idBaja,slocInicial,slocDestino,isBajaSAP,bajas.idDetalleMaestro,dateBaja,documento,ajusteCantidad,serie as serieMtro
            FROM bajas JOIN detallemaestro
            ON bajas.idDetalleMaestro = detallemaestro.idDetalleMaestro
            JOIN maestroseries ON maestroseries.idMaestroSerie = detallemaestro.idMaestroSerie
        ');
        foreach($query->result() as $row){
            $result[] = $row;
        }
        return $result;
    }
    public function add($arg){
        $this->db->insert('bajas',$arg);
    }
}