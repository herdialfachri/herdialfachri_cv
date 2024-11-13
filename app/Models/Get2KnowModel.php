<?php

namespace App\Models;

use CodeIgniter\Model;

class Get2KnowModel extends Model
{
    protected $table = 'get_to_know_me';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'description'];
}