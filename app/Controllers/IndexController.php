<?php

namespace App\Controllers;

class IndexController extends BaseController {

    public function index()
    {

        $this->service->render('index.phtml');

    }

    public function teste()
    {

        $this->service->render('teste.phtml');

    }

}