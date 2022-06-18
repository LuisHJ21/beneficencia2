<?php

namespace App\Models;

use CodeIgniter\Model;

class SerfinModel extends Model
{
    protected $table      = 'serfin';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['brinda','mensualidad','requisitos'];

    protected $useTimestamps = true;
    protected $createdField  = 'creado';
    protected $updatedField  = 'actualizado';
  

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}