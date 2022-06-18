<?php

namespace App\Controllers;
use CodeIgniter\Controllers;

use App\Models\NoticiasModel;
use App\Models\ImagenesnoticiasModel;

class Detallenoticia extends BaseController
{

	protected $noticia;
	protected $imagenes;

	public function __construct()
	{
		$this->noticia=new NoticiasModel();
		$this->imagenes=new ImagenesnoticiasModel();
	}


	public function index($idnoticia)
	{
		$noticia=$this->noticia->where("id_noticia",$idnoticia)->first();
		$imagenes=$this->imagenes->where("id_noticia",$idnoticia)->findall();
		$titulo="Noticia";
		$data=["noticia"=>$noticia,"imagenes"=>$imagenes];
		$dataheader=["titulo"=>$titulo];
		echo view('visitante/header',$dataheader);
		echo view('visitante/detallenoticia',$data);
		echo view('visitante/footer');
	}
}
