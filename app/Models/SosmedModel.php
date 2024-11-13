<?php

namespace App\Models;

use CodeIgniter\Model;

class SosmedModel extends Model
{
    protected $table = 'sosmed';
    protected $primaryKey = 'id';
    protected $allowedFields = ['platform', 'url'];
}