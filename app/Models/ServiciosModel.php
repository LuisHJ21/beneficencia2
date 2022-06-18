<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiciosModel extends Model
{
    protected $table      = 'servicios';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre','imagen','contenido'];

    protected $useTimestamps = true;
    protected $createdField  = 'creado';
    protected $updatedField  = 'actualizado';
  

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}