<?php

namespace App\Controllers;
use App\Models\MensajesModel;

class Dashboard extends BaseController
{
	protected $mensajes;

	public function __construct()
	{
		$this->mensajes=new MensajesModel();
	}


	public function index()
	{
		$noread=$this->mensajes->where('estado', 'no leido')->findall();
		$titulo=['titulo'=>"DashBoard","noread"=>$noread];

        echo view('administracion/header',$titulo);
        echo view('administracion/dashboard');
		echo view('administracion/footer');
		
	}
}
