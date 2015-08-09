<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 02:09 AM
 */
class Mapaactual_model extends CI_Model
{
    /*
     * Atributes:
     * idMapaActual         int
     * partNumber           varchar 10
     * localizacionRandom   varchar 8
     * sufijoRandom         char 1
     * localizacionServicio varchar 17
     * sufijoServicio       char 1
     * estacion             char 1
     * emailMRP             varchar 50
     * emailSupervisor      varchar 50
     * maximoServicio       int
     * caminaresEntrada     int
     * caminaresSalida      int
     */

    public function __construct(){
        parent::__construct();
    }
    public function getAll(){
        $result = array();
        $query = $this->db->get('mapaactual');
        foreach($query->result() as $row){
            $result[] = $row;
        }
        return $result;
    }

    public function add($params){
        $this->db->insert('mapaactual',$params);
    }
}