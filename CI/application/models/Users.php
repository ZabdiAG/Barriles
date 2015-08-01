<?php 
Class Users extends CI_Model{
	
	function login($username, $password){
		$this->db->select('idUsuario, nombre, password, gafete, isAdministrador');
		$this->db->from('usuarios');
		$this->db->where('nombre', $username);
		$this->db->where('password', MD5($password));

		$query = $this->db->get();

		if($query->num_rows() == 1){
			return $query->result();
		}else{
			return false;
		}
	}

	function getAllUsers(){
		$this->db->select('*');
		$this->db->from('usuarios');
		$query = $this->db->get();

		if($query){
			return $query->result();
		}
	}
}
?>