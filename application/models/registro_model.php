<?php

	class Registro_model extends CI_Model{

		function __construct(){
			parent::__construct();
		}

		function registrar($datos){
			$this->db->insert('faggots',$datos);
		}
	}

?>