<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'      => $this->generateTitle(),
            'menu'       => 'home',
            'breadcrumb' => $this->generateBreadcrumb(),
        ];
        return view('v_home', $data);
    }
}
