<?php

namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\DirectorioModel;
use App\Models\MensajesModel;



require_once __DIR__ . '/../../vendor/autoload.php';


class Directorioadmin extends BaseController
{

	protected $directorio;
	protected $mensajes;


	public function __construct()
	{

		$this->directorio=new DirectorioModel();
		 $this->mensajes=new MensajesModel();



	}
	public function index()
	{
		$directorio=$this->directorio->where('estado','Activo')->findall();
		$noread=$this->mensajes->where('estado', 'no leido')->findall();


		$data=
		[
			"directorio"=>$directorio
		];
		$titulo=['titulo'=>"Directorio","noread"=>$noread];

		echo view('administracion/header',$titulo);
		echo view('administracion/directorio/directorio',$data);
		echo view('administracion/footer');
	}

	public function eliminados()
	{
		$directorio=$this->directorio->where('estado','Inactivo')->findall();
		$noread=$this->mensajes->where('estado', 'no leido')->findall();

		$data=
		[
			"directorio"=>$directorio
		];
		$titulo=['titulo'=>"Miembros Eliminados","noread"=>$noread];

		echo view('administracion/header',$titulo);
		echo view('administracion/directorio/eliminados',$data);
		echo view('administracion/footer');
	}

	public function agregar()
	{
		$noread=$this->mensajes->where('estado', 'no leido')->findall();

		$titulo=['titulo'=>"Añadir Miembro","noread"=>$noread];
		echo view('administracion/header',$titulo);
		echo view('administracion/directorio/nuevodirectorio');
		echo view('administracion/footer');
	}

	public function registrar()
	{
		try{
			$directorio=$this->directorio->save(
				[
					"nombres"=>$this->request->getPost('nombres'),
					"apellidos"=>$this->request->getPost('apellidos'),
					"cargo"=>$this->request->getPost('cargo')
				]
				);

				return redirect()->back()->with("success","Exito en el registro");

		}catch(Exception $e)
		{
			return redirect()->back()->with("error","Error al registrar nuevo miembro");
		}
	}

	public function actualizar()
	{
		try{
			$directorio=$this->directorio->update(
				$this->request->getPost('ideditar'),
				[
					"nombres"=>$this->request->getPost('nombreseditar'),
					"apellidos"=>$this->request->getPost('apellidoseditar'),
					"cargo"=>$this->request->getPost('cargoeditar')
				]
				);

				return redirect()->back()->with("success","Miembro se ha actualizado con Exito");

		}catch(Exception $e)
		{
			return redirect()->back()->with("error","Ha ocurrido un error en la Actualizacion.");
		}
	}

	public function eliminar()
	{
		try {

			$directorio=$this->directorio->update(
				$this->request->getPost('ideliminar'),
				[
			
					"estado"=>"Inactivo"
				]
				);

				return redirect()->to(base_url('admin/directorio'))->with("success","El Miembro se ha Eliminado Correctamente.");
			
		} catch (Exception $e) {
			return redirect()->to(base_url('admin/directorio'))->with("error","Ha ocurrido un error al Eliminar.");

		}
	}

	public function restaurar()
	{
		try {

			$directorio=$this->directorio->update(
				$this->request->getPost('idrestaurar'),
				[
			
					"estado"=>"Activo"
				]
				);

				return redirect()->to(base_url('admin/directorio'))->with("success","El Miembro se ha Restaurado Correctamente.");
			
		} catch (Exception $e) {
			return redirect()->to(base_url('admin/directorio'))->with("error","Ha ocurrido un error al Eliminar.");
		}
	}

	public function subirimagen()
	{
		$nombre= strtolower($this->request->getPost('tituloimagen'));

		$img= $this->request->getFile('imagensubir');
		
		$extension=$img->guessExtension();
		$path= strtr($nombre," ", "_");
		$path2=$path.'.'.$extension;
		$img->move('imageUploads/directorio/',$path2);
	
		$path3=base_url().'/imageUploads/directorio/'.$path2;

		
		

		$directorio=$this->directorio->update(
			$this->request->getPost('idagregarimagen'),
			[
				"imagen"=>$path3
			]
			); 

		return redirect()->to(base_url('admin/directorio'));

	}




	


}
