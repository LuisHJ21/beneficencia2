<?php

namespace App\Models;

use CodeIgniter\Model;

class NosotrosModel extends Model
{
    protected $table      = 'nosotros';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['historia','mision','vision','imagen_historia','telefono','direccion','correo'];

    protected $useTimestamps = true;
    protected $createdField  = 'creado';
    protected $updatedField  = 'actualizado';
  

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}