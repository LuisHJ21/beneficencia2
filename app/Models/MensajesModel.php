<?php

namespace App\Models;

use CodeIgniter\Model;

class MensajesModel extends Model
{
    protected $table      = 'mensajes';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['asunto','mensaje','nombre_envia','correo_envia','estado'];

    protected $useTimestamps = true;
    protected $createdField  = 'creado';
    protected $updatedField  = 'actualizado';
  

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}