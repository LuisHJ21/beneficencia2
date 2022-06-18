<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\NichosModel;

use App\Models\ServiciosModel;
use App\Models\MensajesModel;



require_once __DIR__ . '/../../vendor/autoload.php';


class Nichosadmin extends BaseController
{
	protected $nichos;
	protected $servicio;
	protected $mensajes;




	public function __construct()
	{

		$this->mensajes=new MensajesModel();

		$this->nichos=new NichosModel();
		$this->servicio=new ServiciosModel();



	}
	public function index()
	{

		$noread=$this->mensajes->where('estado', 'no leido')->findall();

		$nichosV=$this->nichos->where('tipo','v') ->orderBy('nivel', 'desc')->findall();
		$nichosP=$this->nichos->where('tipo','p') ->orderBy('nivel', 'desc')->findall();
		$nichosA=$this->nichos->where('tipo','a') ->orderBy('nivel', 'desc')->findall();
		
		$titulo=['titulo'=>"Nichos","noread"=>$noread];
		$servicio=$this->servicio->where('id','1')->first();


		$data=
		[
			"nichosv"=>$nichosV,
			"nichosp"=>$nichosP,
			"nichosa"=>$nichosA,
			"servicio"=>$servicio
	
		];

		echo view('administracion/header',$titulo);
		echo view('administracion/nichos/nichos',$data);
		echo view('administracion/footer');
	}


	public function agregar()
	{
		try {

			$nivel=$this->request->getPost('nivel');
			$precio=$this->request->getPost('precio');
			$tipo=$this->request->getPost('tipo');


			$nichos=$this->nichos->save(
				[
					"nivel"=>$nivel,
					"precio"=>$precio,
					"tipo"=>$tipo
				]
			);

			return redirect()->back()->with('success','Agregado con Exito')->with('tipo',$tipo);
		
		} 
		catch (Exception $e) {
			return redirect()->back()->with('error','Hubo un Error')->with('tipo',$tipo);
		}

		
	}

	public function editarprecio()
	{
		try {

		
			$tipo=$this->request->getPost('tipoeditar');
			$precio=$this->request->getPost('precioeditar');
			

			$nichos=$this->nichos->update(
				$this->request->getPost('idnicho'),
				[
					"precio"=>$precio
					
				]
			);

			return redirect()->back()->with('success','Actualizado con Exito')->with('tipo',$tipo);
		
		} 
		catch (Exception $e) {
			return redirect()->back()->with('error','Hubo un Error')->with('tipo',$tipo);
		}

		
	}


	public function subirimagen()
	{
		try {

		$nombre= "imagennichos";

		$img= $this->request->getFile('imagensubir');
		
		$extension=$img->guessExtension();
		$path= strtr($nombre," ", "_");
		$path2=$path.'.'.$extension;
		$img->move('imageUploads/servicios/',$path2);
	
		$path3=base_url().'/imageUploads/servicios/'.$path2;

		
		

		$servicio=$this->servicio->update(
			"1",
			[
				"imagen"=>$path3
			]
			); 

		return redirect()->to(base_url('admin/nichos'))->with("successimg","Imagen Actualizada");

		} catch (Exception $e) {

			return redirect()->to(base_url('admin/nichos'))->with("errorimg","Error en la Actualizacion");

		}

	}
}