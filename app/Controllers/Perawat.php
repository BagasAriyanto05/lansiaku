<?php

namespace App\Controllers;

class Perawat extends BaseController
{
    public function index(): string
    {
        return view('perawat/index');
    }
}
