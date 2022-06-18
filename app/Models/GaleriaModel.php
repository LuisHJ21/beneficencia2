<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriaModel extends Model
{
    protected $table      = 'galeria-serfin';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['imagen','public_id'];

    protected $useTimestamps = true;
    protected $createdField  = 'creado';
    protected $updatedField  = 'actualizado';
    protected $deletedField  = 'eliminado';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}