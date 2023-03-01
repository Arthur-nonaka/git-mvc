<?php

namespace App\Controller;
use App\Model\GitModel;

class GitController
{

    public function startController()
    {
        $gitModel = new GitModel();
        return $gitModel->Datas();
    }
}
