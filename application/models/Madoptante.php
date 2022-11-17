<?php 
/**
  * 
  */
 class MAdoptante extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function guardaradoptante($param){
 		$campos = array(
 			'Id' => $param['Id'],
 			'Nombre' => $param['Nombre']
 		);

 		$this->db->insert('adoptante',$campos);
 	}
 } ?>