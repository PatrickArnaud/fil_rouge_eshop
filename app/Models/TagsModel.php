<?php

namespace App\Models;

use CodeIgniter\Model;

class TagsModel extends Model
{
    protected $table         = 'tag';
    protected $primaryKey = 'id_tag';
    protected $allowedFields = [
        'id_tag', 'name_tag',
    ];
    protected $returnType    = \App\Entities\Tags::class;
    protected $useTimestamps = true;
}