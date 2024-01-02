<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        return view('admin/index');
    }

    public function adminPerawat(): string
    {
        return view('admin/perawat');
    }

    public function adminLansia(): string
    {
        return view('layout/lansia');
    }

    public function detailLansia(): string
    {
        return view('layout/detail-lansia');
    }
}
