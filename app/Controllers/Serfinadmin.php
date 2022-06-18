<?php

namespace App\Controllers;
use CodeIgniter\Controllers;


use App\Models\SerfinModel;
use App\Models\MensajesModel;

use App\Models\ServiciosModel;


require_once __DIR__ . '/../../vendor/autoload.php';




class Serfinadmin extends BaseController
{

	protected $serfin;

	protected $servicio;
	protected $mensajes;




	public function __construct()
	{

		$this->serfin=new SerfinModel();

		$this->servicio=new ServiciosModel();
		$this->mensajes=new MensajesModel();

		

	}

	public function index()
	{

		$serfin=$this->serfin->first();

		$servicio=$this->servicio->where('id','2')->first();
		$noread=$this->mensajes->where('estado', 'no leido')->findall();


		$data=["serfin"=>$serfin,"servicio"=>$servicio];
		
		
		$titulo="SERFIN";
		$dataheader=["titulo"=>$titulo,"noread"=>$noread];
		echo view('administracion/header',$dataheader);
		echo view('administracion/serfin',$data);
		echo view('administracion/footer');
	}

	public function guardarservicio()
	{
		try {
			
			$serfin=$this->serfin->first();
			$id=$serfin['id'];

			$servicio=$this->request->getPost('servicios');

			$serfing=$this->serfin->update(
				$id,
				[
					"brinda"=>$servicio
				]
				);

			
			return redirect()->back()->with("success","Servicios a brindar actualizados")->with("var","servicio");




		} catch (Exception $e) {
			return redirect()->back()->with("error","Error en la actualizacion")->with("var","servicio");

		}
	}

	public function guardarmensualidad()
	{
		try {
			
			$serfin=$this->serfin->first();
			$id=$serfin['id'];


			$mensualidad=$this->request->getPost('mensualidad');

			$serfing=$this->serfin->update(
				$id,
				[
					"mensualidad"=>$mensualidad
				]
				);

			
			return redirect()->back()->with("success","Mensualidad se ha actualizado")->with("var","mensualidad");





		} catch (Exception $e) {
			return redirect()->back()->with("error","Error en la actualizacion")->with("var","mensualidad");
		}

	}

	public function guardarrequisitos()
	{
		try {
			
			$serfin=$this->serfin->first();
			$id=$serfin['id'];


			$requisitos=$this->request->getPost('requisitos');

			$serfing=$this->serfin->update(
				$id,
				[
					"requisitos"=>$requisitos
				]
				);

			
			return redirect()->back()->with("success","Requisitos se ha actualizado")->with("var","requisitos");





		} catch (Exception $e) {
			
			return redirect()->back()->with("error","Error en la actualizacion");

		}

	}





	public function subirimagen()
	{
		try {

		$nombre= "imagenserfin";

		$img= $this->request->getFile('imagensubir');
		
		$extension=$img->guessExtension();
		$path= strtr($nombre," ", "_");
		$path2=$path.'.'.$extension;
		$img->move('imageUploads/servicios/',$path2);
	
		$path3=base_url().'/imageUploads/servicios/'.$path2;

		
		
		$servicio=$this->servicio->update(
			"2",
			[
				"imagen"=>$path3
			]
			); 

		return redirect()->to(base_url('admin/serfin'))->with("successimg","Imagen Actualizada");

		} catch (Exception $e) {

			return redirect()->to(base_url('admin/serfin'))->with("errorimg","Error en la Actualizacion");

		}

	}



}
