<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('layout/topbar');
        echo view('layout/sidebar');
        echo view('pages/main');
        echo view('layout/footer');
    }
}
