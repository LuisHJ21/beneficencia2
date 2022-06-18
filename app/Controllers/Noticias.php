<?php

namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\NoticiasModel;



class Noticias extends BaseController
{
	protected $noticias;
	
	public function __construct()
	{
		$this->noticias=new NoticiasModel();
		
	}

	public function index()
	{
		$noticias=$this->noticias->where('estado','Activo') ->orderBy('id_noticia', 'desc')->findall();
		$titulo="Noticias";

		$data=["noticias"=>$noticias];
		$dataheader=["titulo"=>$titulo];

		echo view('visitante/header',$dataheader);
		echo view('visitante/noticias',$data);
		echo view('visitante/footer');
	}
}
