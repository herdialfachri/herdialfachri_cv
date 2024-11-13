<?php

namespace App\Models;

use CodeIgniter\Model;

class MySkillModel extends Model
{
    protected $table = 'myskill';
    protected $primaryKey = 'id';
    protected $allowedFields = ['skills'];
}