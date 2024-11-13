<?php

namespace App\Controllers;

use App\Models\SosmedModel;
use App\Models\Get2KnowModel;
use App\Models\AboutMeModel;
use App\Models\MySkillModel;

class Home extends BaseController
{
    public function index()
    {     
        $mySkillModel = new MySkillModel();
        $data['myskill'] = $mySkillModel->findAll();

        $aboutMeModel = new AboutMeModel();
        $data['aboutme'] = $aboutMeModel->first();
        
        $sosmedModel = new SosmedModel();
        $data['sosmed'] = $sosmedModel->findAll();

        $get2knowModel = new Get2KnowModel();
        $data['get2know'] = $get2knowModel->first();
        
        return view('index', $data);
    }
}
