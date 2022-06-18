<?php

namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\UsuariosModel;
use App\Models\MensajesModel;


class Usuariosadmin extends BaseController
{

	protected $usuarios;
	protected $db;
	protected $mensajes;


	public function __construct()
	{
		$this->usuarios=new UsuariosModel();
		$this->db = \Config\Database::connect();
		$this->mensajes=new MensajesModel();


	}
	public function index()
	{

		$noread=$this->mensajes->where('estado', 'no leido')->findall();

		$usuarios=$this->usuarios->where('estado','Activo')->findall();

		$data=[
			"usuarios"=>$usuarios
		];


		$titulo=['titulo'=>"Usuarios","noread"=>$noread];
		echo view('administracion/header',$titulo);
		echo view('administracion/usuarios/usuarios',$data);
		echo view('administracion/footer');
	}

	public function agregar()
	{
		$noread=$this->mensajes->where('estado', 'no leido')->findall();

		$titulo=['titulo'=>"Agregar Usuario","noread"=>$noread];
		echo view('administracion/header',$titulo);
		echo view('administracion/usuarios/nuevousuario');
		echo view('administracion/footer');
	}

	public function eliminados()
	{
		$noread=$this->mensajes->where('estado', 'no leido')->findall();

		$usuarios=$this->usuarios->where('estado','Inactivo')->findall();

		$data=[
			"usuarios"=>$usuarios
		];
		$titulo=['titulo'=>"Usuarios Eliminados","noread"=>$noread];
		echo view('administracion/header',$titulo);
		echo view('administracion/usuarios/eliminados',$data);
		echo view('administracion/footer');
	}


	public function registrar()
	{
		

		$contraseña1=$this->request->getPost('pass1');
		$contraseña2=$this->request->getPost('pass2');

		 if($contraseña1==$contraseña2)
		{
			$hash=password_hash($contraseña2,PASSWORD_DEFAULT);
			
			
			try
			{
				$usuarios=$this->usuarios->save(
					[
						"nombre_usuario"=>$this->request->getPost('nombre_user'),
						"nombres"=>$this->request->getPost('nombres'),
						"apellidos"=>$this->request->getPost('apellidos'),
						"sexo"=>$this->request->getPost('genero'),
						"contraseña"=>$hash
					]
				);
				return redirect()->back()->with('success','Registrado con Exito');
				
			}catch(Exception $e)
			{
				return redirect()->back()->with('error','Error al guardar Registro');
			}
		}
		else
		{
			//return redirect()->back()->with('passno','Contraseñas no coinciden');
			
		}


		
	}


	public function validarusuario($usuario)
	{
		$datos=$this->db->table("usuarios as u")->select("u.nombre_usuario")
		->where("nombre_usuario",$usuario)
		->get()->getResult();

		$res=["datos"=>$datos];

		echo json_encode($res);

	}


	public function actualizar()
	{
	try
		{
			$usuarios=$this->usuarios->update(
				$this->request->getPost('ideditar'),
				[
					"nombres"=>$this->request->getPost('nombreseditar'),
					"apellidos"=>$this->request->getPost('apellidoseditar'),
					"sexo"=>$this->request->getPost('genero')
				]
			);
			return redirect()->to(base_url('admin/usuarios'))->with('success','Nuevo Usuario Actualizado Correctamente.');
			
		}catch(Exception $e)
		{
			return redirect()->to(base_url('admin/usuarios'))->with('error','Ha ocurrido un error en la Actualizacion.');
		}
	}


	public function eliminar()
	{
	try
		{
			$usuarios=$this->usuarios->update(
				$this->request->getPost('ideliminar'),
				[
				
					"estado"=>"Inactivo"
				]
			);
			return redirect()->to(base_url('admin/usuarios'))->with('success','Usuario Eliminado con Exito.');
			
		}catch(Exception $e)
		{
			return redirect()->to(base_url('admin/usuarios'))->with('error','Error al Eliminar Usuario.');
		}
	}

	public function restaurar()
	{
	try
		{
			$usuarios=$this->usuarios->update(
				$this->request->getPost('idrenovar'),
				[
				
					"estado"=>"Activo"
				]
			);
			return redirect()->to(base_url('admin/usuarios'))->with('success','Usuario Restaurado con Exito.');
			
		}catch(Exception $e)
		{
			return redirect()->to(base_url('admin/usuarios'))->with('error','Error al Restaurar Usuario.');
		}
	}


	
}
