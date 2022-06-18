<?php

namespace App\Controllers;
use CodeIgniter\Controllers;
use App\Models\NosotrosModel;

use App\Models\MensajesModel;


class Contactoadmin extends BaseController
{
	protected $nosotros;
	protected $mensajes;


	public function __construct()
	{
		$this->nosotros=new NosotrosModel();
		$this->mensajes=new MensajesModel();

	}

	public function index()
	{
		$nosotros=$this->nosotros->first();
		$data=["nosotros"=>$nosotros];

		$noread=$this->mensajes->where('estado', 'no leido')->findall();

		
		$titulo="Contacto";
		$dataheader=["titulo"=>$titulo,"noread"=>$noread];
		echo view('administracion/header',$dataheader);
		echo view('administracion/contacto',$data);
		echo view('administracion/footer');
	}
}
