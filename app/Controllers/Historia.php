<?php

namespace App\Controllers;
use CodeIgniter\Controllers;

use App\Models\NosotrosModel;

class Historia extends BaseController
{
	protected $nosotros;

	public function __construct()
	{
		$this->nosotros=new NosotrosModel();
	}

	public function index()
	{
		$nosotros=$this->nosotros->first();
		$titulo="Historia";
		$data=["nosotros"=>$nosotros];
		$dataheader=["titulo"=>$titulo];
		echo view('visitante/header',$dataheader);
		echo view('visitante/historia',$data);
		echo view('visitante/footer');
	}
}
