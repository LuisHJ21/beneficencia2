<?php

namespace App\Models;

use CodeIgniter\Model;

class EventosModel extends Model
{
    protected $table      = 'eventos';
    protected $primaryKey = 'id_evento';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['imagen','nombre','fecha','hora','lugar','detalle','estado'];

    protected $useTimestamps = true;
    protected $createdField  = 'creado';
    protected $updatedField  = 'actualizado';
  

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}