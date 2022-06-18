<?php

namespace App\Controllers;
use CodeIgniter\Controllers;

use App\Models\NosotrosModel;
use App\Models\MensajesModel;

class Contacto extends BaseController
{
	protected $nosotros;
	protected $mensajes;


	public function __construct()
	{
		$this->nosotros=new NosotrosModel();
		$this->mensajes=new MensajesModel();

	}

	public function index()
	{
		$nosotros=$this->nosotros->first();
		$data=["nosotros"=>$nosotros];
		
		$titulo="Contacto";
		$dataheader=["titulo"=>$titulo];
		echo view('visitante/header',$dataheader);
		echo view('visitante/contacto',$data);
		echo view('visitante/footer');
	}


	public function enviarmensaje()
	{

		try {

			$nombre = $this->request->getPost("nombre");
			$correo = $this->request->getPost("email");
			$asunto = $this->request->getPost("asunto");
			$mensaje = $this->request->getPost("mensaje");



			$mensaje=$this->mensajes->save(
				[
					"asunto"=>$asunto,
					"mensaje"=>$mensaje,
					"nombre_envia"=>$nombre,
					"correo_envia"=>$correo
				]
			);

			return redirect()->to(base_url('contacto'))->with("success","Mensaje enviado Correctamente.");
		
		} catch (Exception $e) {
			return redirect()->to(base_url('contacto'))->with("error","No se podido enviar su mensaje.Vuelva a Intentarlo.");

		}

	}
}
