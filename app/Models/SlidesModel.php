<?php

namespace App\Models;

use CodeIgniter\Model;

class SlidesModel extends Model
{
    protected $table      = 'slides';
    protected $primaryKey = 'id_slide';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['imagen','public_id','titulo','contenido'];

    protected $useTimestamps = true;
    protected $createdField  = 'creado';
    protected $updatedField  = 'actualizado';
    protected $deletedField  = 'eliminado';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}