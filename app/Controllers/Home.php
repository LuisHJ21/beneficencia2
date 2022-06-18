<?php

namespace App\Controllers;
use CodeIgniter\Controllers;

use App\Models\SlidesModel;

use App\Models\EventosModel;
use App\Models\DirectorioModel;
use App\Models\NoticiasModel;

class Home extends BaseController
{

	protected $slides;
	protected $eventos;
	protected $directorio;
	protected $noticias;
	
	public function __construct()
	{
		$this->slides=new SlidesModel();
		$this->eventos=new EventosModel();
		$this->directorio=new DirectorioModel();
		$this->noticias=new NoticiasModel();
	}


	public function index()
	{
		$noticias=$this->noticias->where('estado','Activo') ->orderBy('id_noticia', 'desc')->findall();
		$directorio=$this->directorio ->findall();
		$eventos=$this->eventos->where('estado','Activo') ->orderBy('fecha', 'desc')->findall();
		$slides=$this->slides->findall();
		$titulo="Inicio";
		$data=
		[
			"slides"=>$slides,
			"eventos"=>$eventos,
			"directorio"=>$directorio,
			"noticias"=>$noticias
			
		];

		$dataheader=["titulo"=>$titulo];

		echo view('visitante/header',$dataheader);
		echo view('visitante/principal',$data);
		echo view('visitante/footer');
	}
}
