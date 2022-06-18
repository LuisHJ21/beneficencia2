<?php

namespace App\Models;

use CodeIgniter\Model;

class NoticiasModel extends Model
{
    protected $table      = 'noticias';
    protected $primaryKey = 'id_noticia';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['imagen','titulo','contenido','estado'];

    protected $useTimestamps = true;
    protected $createdField  = 'creado';
    protected $updatedField  = 'actualizado';
  

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}