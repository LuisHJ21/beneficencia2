<?php

namespace App\Controllers;
use CodeIgniter\Controllers;

use App\Models\SerfinModel;

use App\Models\ServiciosModel;

use App\Models\GaleriaModel;


class Serfin extends BaseController
{

	protected $serfin;
	protected $servicio;
	protected $galeria;



	public function __construct()
	{
		$this->serfin=new SerfinModel();
		$this->servicio=new ServiciosModel();
		$this->galeria=new GaleriaModel();

		
	}

	public function index()
	{

		$servicio=$this->servicio->where('id','2')->first();
		$galeria=$this->galeria->findall();


		$serfin=$this->serfin->first();

		$data=["serfin"=>$serfin,"servicio"=>$servicio,"galeria"=>$galeria];
		
		
		$titulo="SERFIN";
		$dataheader=["titulo"=>$titulo];
		echo view('visitante/header',$dataheader);
		echo view('visitante/serfin',$data);
		echo view('visitante/footer');
	}
}
