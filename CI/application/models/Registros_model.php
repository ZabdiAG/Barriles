<?php

/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 10/08/15
 * Time: 02:34 PM
 */
class Registros_model extends CI_Model
{
    /*
     * idUsuario int
     * hora timestap
     * idRuta int
     */


    public function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $result = Array();
        $query = $this->db->query('
          SELECT usuarios.nombre as nombreUsuario, rutas.nombre, registros.idUsuario, hora, registros.idRuta
          FROM registros JOIN rutas on registros.idRuta = rutas.idRuta JOIN usuarios on registros.idUsuario = usuarios.idUsuario
          ');
        foreach($query->result() as $row){
            $result[] = $row;
        }
        return $result;
    }

    public function add($arg){
        $this->db->insert('registros',$arg);
    }
}