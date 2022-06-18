<?php

namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\NoticiasModel;
use App\Models\ImagenesnoticiasModel;
use App\Models\MensajesModel;


require_once __DIR__ . '/../../vendor/autoload.php';


class Noticiasadmin extends BaseController
{
	protected $noticias;
	protected $imgnoticia;
	protected $mensajes;


	public function __construct()
	{
		$this->mensajes=new MensajesModel();

		$this->noticias=new NoticiasModel();
		$this->imgnoticia=new Imagenesnoticiasmodel();
		
	}

	public function index()
	{
		$noread=$this->mensajes->where('estado', 'no leido')->findall();

		$noticias=$this->noticias->where('estado','Activo')->findall();
		$data=["noticias"=>$noticias];

		$titulo=['titulo'=>"Noticias","noread"=>$noread];
		echo view('administracion/header',$titulo);
		echo view('administracion/noticias/noticias',$data);
		echo view('administracion/footer');
	}

	public function eliminadas()
	{
		$noread=$this->mensajes->where('estado', 'no leido')->findall();

		$noticias=$this->noticias->where('estado','Inactivo')->findall();
		$data=["noticias"=>$noticias];

		$titulo=['titulo'=>"Noticias Eliminadas","noread"=>$noread];
		echo view('administracion/header',$titulo);
		echo view('administracion/noticias/eliminadas',$data);
		echo view('administracion/footer');
	}

	public function eliminar()
	{
		try
		{

			$noticias=$this->noticias->update(
				$this->request->getPost('ideliminar'),
				[
					
					"estado"=>"Inactivo"
				]
				);

			return redirect()->to(base_url('admin/noticias'))->with('success','Noticia Eliminada con Exito');


		}catch(Excption $e)
		{
			return redirect()->to(base_url('admin/noticias'))->with('error','Error en la Eliminacion');

		}

	}

	public function restaurar()
	{
		try
		{

			$noticias=$this->noticias->update(
				$this->request->getPost('idrestaurar'),
				[
					
					"estado"=>"Activo"
				]
				);

			return redirect()->to(base_url('admin/noticias'))->with('success','Noticia Restaurada con Exito');


		}catch(Excption $e)
		{
			return redirect()->to(base_url('admin/noticias'))->with('error','Error restaurar Noticia');

		}

	}


	public function agregar()
	{
		$noread=$this->mensajes->where('estado', 'no leido')->findall();

		$titulo=['titulo'=>"Agregar Noticia","noread"=>$noread];
		echo view('administracion/header',$titulo);
		echo view('administracion/noticias/nuevanoticia');
		echo view('administracion/footer');
	}

	public function registrar()
	{
		try
		{
			
			$nombre= substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5);

			$img= $this->request->getFile('imagensubir');
			
			$extension=$img->guessExtension();
			$path= strtr($nombre," ", "_");
			$path2=$path.'.'.$extension;
			$img->move('imageUploads/noticias/',$path2);
		
			$path3=base_url().'/imageUploads/noticias/'.$path2;

			
			
			


			$noticias=$this->noticias->save(
				[
					"imagen"=>$path3,
					"titulo"=> $this->request->getPost('titulo'),
					"contenido"=>$this->request->getPost('contenido')
				]
				);

			return redirect()->back()->with('success','Registro Exitoso');


		}catch(Excption $e)
		{
			return redirect()->back()->with('error','Error en el Registro');

		}
	}


	public function anexar()
	{
		try {

			$id=$this->request->getPost('idsubir');
			$imagenes= $this->request->getFiles();

			foreach($imagenes['imagenessubir'] as $imagen)
			{
				$nombre= substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5);
				$extension=$imagen->guessExtension();
				$path= strtr($nombre," ", "_");
				$path2=$path.'.'.$extension;
				$imagen->move('imageUploads/imagenesNoticias/',$path2);
			
				$path3=base_url().'/imageUploads/imagenesNoticias/'.$path2;


		
				

				$imgnoticia=$this->imgnoticia->save(
					[
						"imagen"=>$path3,
						"id_noticia"=> $id
						
					]
					);

				


			}


			return redirect()->back()->with('success','Imagenes Registradas con Exito');
	
		
		
		} catch (Excption $e) {
			return redirect()->back()->with('error','Error en el Registro');
		}
	}
}
