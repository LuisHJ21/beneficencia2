<?php

namespace App\Controllers;
use CodeIgniter\Controllers;

use App\Models\MensajesModel;

class Mensajesadmin extends BaseController
{

	protected $mensajes;
	

	public function __construct()
	{
		$this->mensajes=new MensajesModel();
	}

	public function index()
	{

		$mensajes=$this->mensajes->orderBy('id', 'desc')->findall();

		$noread=$this->mensajes->where('estado', 'no leido')->findall();

		$data=["mensajes"=>$mensajes];
		
		$titulo="Mensajes";
		$dataheader=["titulo"=>$titulo,"noread"=>$noread];
		echo view('administracion/header',$dataheader);
		echo view('administracion/mensajes/mensajes',$data);
		echo view('administracion/footer');
	}


	public function detalle($id)
	{
		$mensajes=$this->mensajes->where('id',$id)->first();
		$noread=$this->mensajes->where('estado', 'no leido')->findall();

		$mensaje=$this->mensajes->update(
			$mensajes['id'],
			[
				"estado"=>"leido"
			]
		);

		$noread=$this->mensajes->where('estado', 'no leido')->findall();


		$data=["mensaje"=>$mensajes];

	
		$titulo="Detalle Mensaje";
		$dataheader=["titulo"=>$titulo,"noread"=>$noread];
		echo view('administracion/header',$dataheader);
		echo view('administracion/mensajes/detallemensaje',$data);
		echo view('administracion/footer');
	}
}
