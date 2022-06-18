<?php

namespace App\Controllers;
use CodeIgniter\Controllers;

use App\Models\NichosModel;
use App\Models\ServiciosModel;


class Nichos extends BaseController
{

	protected $nichos;
	protected $servicio;


	public function __construct()
	{
		
		$this->nichos=new NichosModel();
		$this->servicio=new ServiciosModel();

	}

	public function index()
	{
		$nichosV=$this->nichos->where('tipo','v') ->orderBy('nivel', 'desc')->findall();
		$nichosP=$this->nichos->where('tipo','p') ->orderBy('nivel', 'desc')->findall();
		$nichosA=$this->nichos->where('tipo','a') ->orderBy('nivel', 'desc')->findall();
		$titulo="Nichos";

		$servicio=$this->servicio->where('id','1')->first();


		$data=
		[
			"nichosv"=>$nichosV,
			"nichosp"=>$nichosP,
			"nichosa"=>$nichosA,
			"servicio"=>$servicio
	
		];
		$dataheader=["titulo"=>$titulo];
		echo view('visitante/header',$dataheader);
		echo view('visitante/nichos',$data);
		echo view('visitante/footer');
	}
}
