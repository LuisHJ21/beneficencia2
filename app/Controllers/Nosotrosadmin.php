<?php

namespace App\Controllers;
use CodeIgniter\Controllers;
use App\Models\MensajesModel;

use App\Models\NosotrosModel;

require_once __DIR__ . '/../../vendor/autoload.php';


class Nosotrosadmin extends BaseController
{

	protected $mensajes;


	protected $nosotros;

	public function __construct()
	{
		$this->nosotros=new NosotrosModel();
	

			  $this->mensajes=new MensajesModel();

	}

	public function historia()
	{
		$noread=$this->mensajes->where('estado', 'no leido')->findall();

		$nosotros=$this->nosotros->first();
		$data=["nosotros"=>$nosotros];
		$titulo=['titulo'=>"Historia","noread"=>$noread];
		echo view('administracion/header',$titulo);
		echo view('administracion/nosotros/historia',$data);
		echo view('administracion/footer');
	}

	public function mision()
	{
		$noread=$this->mensajes->where('estado', 'no leido')->findall();

		$nosotros=$this->nosotros->first();
		$data=["nosotros"=>$nosotros];
		$titulo=['titulo'=>"Mision","noread"=>$noread];
		echo view('administracion/header',$titulo);
		echo view('administracion/nosotros/mision',$data);
		echo view('administracion/footer');
	}

	public function vision()
	{
		$noread=$this->mensajes->where('estado', 'no leido')->findall();

		$nosotros=$this->nosotros->first();
		$data=["nosotros"=>$nosotros];
		$titulo=['titulo'=>"Vision","noread"=>$noread];
		echo view('administracion/header',$titulo);
		echo view('administracion/nosotros/vision',$data);
		echo view('administracion/footer');
	}


	public function guardarhistoria()
	{
		try {

			$nosotros=$this->nosotros->first();
			$id=$nosotros['id'];

			$historia=$this->nosotros->update($id,
			[
				"historia"=>$this->request->getPost('histora')
			]);

			return redirect()->to(base_url('admin/nosotros/historia'))->with('success','Exito');

		} catch (Exception $th) {
			return redirect()->to(base_url('admin/nosotros/historia'))->with('error','Error');

		}
		


	}

	public function guardarmision()
	{

		try {

			$nosotros=$this->nosotros->first();
			$id=$nosotros['id'];

			$mision=$this->nosotros->update($id,
			[
				"mision"=>$this->request->getPost('mision')
			]);
			return redirect()->to(base_url('admin/nosotros/mision'))->with('success','Exito');


		} catch (Exception $th) {
			return redirect()->to(base_url('admin/nosotros/mision'))->with('error','Error');

		}
		
		
	}

	public function guardarvision()
	{
		try {

			$nosotros=$this->nosotros->first();
			$id=$nosotros['id'];

			$vision=$this->nosotros->update($id,
			[
				"vision"=>$this->request->getPost('vision')
			]);

			return redirect()->to(base_url('admin/nosotros/vision'))->with('success','Exito');

			
		} catch (Eception $th) {
			return redirect()->to(base_url('admin/nosotros/vision'))->with('error','Error');

		}
		
		
	}


	public function guardarcontacto()
	{

		try {

			$nosotros=$this->nosotros->first();
			$id=$nosotros['id'];

			$contacto=$this->nosotros->update($id,
			[
				"telefono"=>$this->request->getPost('numero'),
				"direccion"=>$this->request->getPost('direccion'),
				"correo"=>$this->request->getPost('correo')


			]);

			return redirect()->to(base_url('admin/contacto'))->with('success','Datos Actualizados');

			
		} catch (Eception $th) {
			return redirect()->to(base_url('admin/contacto'))->with('error','Error en la Actualizacion');

		}

	}

	


	



	public function subirimagenhistoria()
	{
		try {
			$nosotros=$this->nosotros->first();
			$id=$nosotros['id'];

			$nombre= "imagenhistoria";

			$img= $this->request->getFile('imagensubir');
		
			$extension=$img->guessExtension();
			$path= strtr($nombre," ", "_");
			$path2=$path.'.'.$extension;
			$img->move('imageUploads/nosotros/',$path2);
		
			$path3=base_url().'/imageUploads/nosotros/'.$path2;

			
			
		

			$nosotros2=$this->nosotros->update($id,
				[
					"imagen_historia"=>$path3
				]
				); 

			return redirect()->to(base_url('admin/nosotros/historia'))->with('successimg','Exito');
		} catch (Exception $e) {
			return redirect()->to(base_url('admin/nosotros/historia'))->with('errorimg','Error '.$e->getMessage());
		}

	}
}
