<?php 
/**
  * 
  */
 class Cmascotas extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Mmascotas');

 	}
 	public function index(){
 		$this->load->view('mascotas');
 	}

 	public function guardar(){
 		//mascotas
 		$param['Nombre'] = $this->input->post('txtNombre');
 		$param['Raza'] = $this->input->post('txtRaza');
 		$param['Tamaño'] = $this->input->post('intTamaño');
 		$param['Color'] = $this->input->post('txtColor');
 		$param['Edad'] = $this->input->post('intEdad');
 		$param['Hora'] = $this->input->post('timeHora');
 		$param['Fecha'] = $this->input->post('dateFecha');
 		//adoptante
 		$paramadep['Id'] = $this->input->post('intId');
 		$paramadop['Nombre'] = $this->input->post('txtNombre');

 		$lastId = $this->Mmascotas->guardar($param);

    if ($lastId = 0) {
      $paramUsu['Nombre'] = $lastId;
      $this->madoptante->guardaradoptante($paramadop);
    }
  }
 } ?>