<?php
/**
 * Created by PhpStorm.
 * User: Ivette
 * Date: 5/07/15
 * Time: 09:41 PM
 */


class DbConnection{
    public $servername = '127.0.0.1';
    public $username   = 'root';
    public $password   = 'mymetallica1223s';
    public $db_name    = 'recepcion';
    public $mysqli;

    function __construct(){
        $this->mysqli= new Mysqli( $this->servername, $this->username, $this->password, $this->db_name );
        // Check connection
        if ($this->mysqli->connect_error) {
            die("Connection failed: " . $this->mysqli->connect_error);
        }
    }

    /*
     * result :
      array array(N) {
      [0]=&gt;
      array(9) {
        ["idMaterial"]=&gt;
        string(1) "1"
        ["tipoMaterial"]=&gt;
        string(0) ""
        ["fechaAutomatico"]=&gt;
        string(10) "0000-00-00"
        ["proveedor"]=&gt;
        string(0) ""
        ["guia"]=&gt;
        string(0) ""
        ["empresa"]=&gt;
        string(0) ""
        ["requisitor"]=&gt;
        string(0) ""
        ["email"]=&gt;
        string(0) ""
        ["fechaEntrega"]=&gt;
        string(10) "0000-00-00"
      }
    }

     *
     */


    /*$sql = "SELECT * FROM material_indirecto;";
    $recibidos = array();

    $resultado = mysqli_query($sql);

    while ($row = mysqli_fetch_array($resultado)) {
        array_push($recibidos, $row);
    }

    $id_recibidos = $_GET['idMaterial'];

    $sql = "SELECT * FROM material_indirecto WHERE id = $idMaterial;";*/

        

    public function obtenerRecibidos(){
        $res = array();
        $query = "SELECT * FROM material_indirecto";
        $result = $this->mysqli->query($query);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                array_push($res,$row);
            }
        }
        return $res;
    }

    public function obtenerEntregados(){
        $res = array();
        $query = "SELECT * FROM material_indirecto";
        $result = $this->mysqli->query($query);
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {
                array_push($res,$row);
            }
        }
        return $res;
    }


}




