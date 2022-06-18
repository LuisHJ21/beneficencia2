<?php

namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\MensajesModel;
use App\Models\GaleriaModel;

require_once __DIR__ . '/../../vendor/autoload.php';



class Galeriaadmin extends BaseController
{

	protected $mensajes;
	protected $galeria;


	public function __construct()
	{
		$this->mensajes=new MensajesModel();

		$this->galeria=new GaleriaModel();
		
	}

	public function index()
	{

		$galeria=$this->galeria->findall();

		$noread=$this->mensajes->where('estado', 'no leido')->findall();

		$titulo="Galeria SERFIN";

		$data=["galeria"=>$galeria];


		$dataheader=["titulo"=>$titulo,"noread"=>$noread];
		echo view('administracion/header',$dataheader);
		echo view('administracion/galeria',$data);
		echo view('administracion/footer');
	}


	public function subirimagen()
	{
		try {
			$nombre= substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5);

			$img= $this->request->getFile('imagensubir');

		
		
			$extension=$img->guessExtension();
			$path= strtr($nombre," ", "_");
			$path2=$path.'.'.$extension;
			$img->move('imageUploads/galeriaserfin/',$path2);
		
			$path3=base_url().'/imageUploads/galeriaserfin/'.$path2;

			
			
			

			$galeria=$this->galeria->save(
				[
				
					"imagen"=>$path3,
					"public_id"=>'imageUploads/galeriaserfin/'.$path2
					
				]
				); 


			return redirect()->to(base_url('admin/serfin/galeria'))->with('success','Nueva Imagen Agregada Correctamente.');
		} catch (Exception $e) {
			return redirect()->to(base_url('admin/serfin/galeria'))->with('error','Ha ocurrido un error al agregar la Imagen.');
		}

	}


	public function eliminarimagen()
	{
		try {

			$ideliminar=$this->request->getPost('ideliminar');
			$public_id=$this->request->getPost('public_id');

			$galeria=$this->galeria->delete($ideliminar);

			unlink($public_id);

		
			$galeria=$this->galeria->purgeDeleted();

			return redirect()->to(base_url('admin/serfin/galeria'))->with('success','La Imagen se ha Eliminado con Exito.');


			
		} catch (Exception $e) {
			return redirect()->to(base_url('admin/serfin/galeria'))->with('error','Error al Eliminar Imagen.');

		}

	}


	

}
