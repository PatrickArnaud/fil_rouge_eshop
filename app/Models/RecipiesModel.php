<?php

namespace App\Models;

use CodeIgniter\Model;

class RecipiesModel extends Model
{
    protected $table         = 'tag';
    protected $allowedFields = [
        'id_recipies', 'name_recipies',
    ];
    protected $returnType    = \App\Entities\Recipies::class;
    protected $useTimestamps = true;
}