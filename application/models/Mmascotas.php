<?php 
/**
  * 
  */
 class Mmascotas extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}
 	public function guardar($param){
 		$campos = array(
 			'Nombre' => $param['Nombre'],
      	'Raza' => $param['Raza'],
      	'Tamaño' => $param['Tamaño'],
      	'Color' => $param['Color'],
      	'Edad' => $param['Edad'],
		    'Hora' => $param['Hora'],
		    'Fecha' => $param['Fecha'],
 		);

    $this->db->insert('mascotas',$campos);

 	}
 } 