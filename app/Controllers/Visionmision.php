<?php

namespace App\Controllers;
use CodeIgniter\Controllers;

use App\Models\NosotrosModel;
class Visionmision extends BaseController
{

	protected $nosotros;

	public function __construct()
	{
		$this->nosotros=new NosotrosModel();
	}
	public function index()
	{
		$nosotros=$this->nosotros->first();
		$titulo="Mision-Vision";
		$data=["nosotros"=>$nosotros];
		$dataheader=["titulo"=>$titulo];
		echo view('visitante/header',$dataheader);
		echo view('visitante/visionymision',$data);
		echo view('visitante/footer');
	}
}
