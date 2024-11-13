<?php

namespace App\Models;

use CodeIgniter\Model;

class AboutMeModel extends Model
{
    protected $table = 'aboutme';
    protected $primaryKey = 'id';
    protected $allowedFields = ['image', 'title', 'description', 'button_desc', 'target_btn'];
}