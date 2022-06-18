<?php

namespace App\Models;

use CodeIgniter\Model;

class DirectorioModel extends Model
{
    protected $table      = 'directorio';
    protected $primaryKey = 'id_directorio';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['imagen','nombres','apellidos','cargo','estado'];

    protected $useTimestamps = true;
    protected $createdField  = 'creado';
    protected $updatedField  = 'actualizado';
  

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}