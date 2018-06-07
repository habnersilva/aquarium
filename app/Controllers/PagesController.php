<?php

namespace App\Controllers;

class PagesController extends BaseController {

    public function index()
    {
        $this->service->render('pages.phtml');
    }

    public function edit()
    {

        $data['id'] = $this->request->id;

        $data['page'] = [
            'title' => 'Quem Somos',
            'slug' => 'quem-somos',
            'content' => 'lorem ipsun'
        ];


        $this->service->render('pages.phtml', $data);
    }

}