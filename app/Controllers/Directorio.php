<?php

namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\DirectorioModel;


class Directorio extends BaseController
{
	protected $directorio;

	public function __construct()
	{
		$this->directorio=new DirectorioModel();
	}

	public function index()
	{
		$directorio=$this->directorio->findall();
		$titulo="Directorio";

		$data=["directorio"=>$directorio];
		$dataheader=["titulo"=>$titulo];
		echo view('visitante/header',$dataheader);
		echo view('visitante/directorio',$data);
		echo view('visitante/footer');
	}
}
