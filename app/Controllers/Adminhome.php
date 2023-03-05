<?php

namespace App\Controllers;

class Adminhome extends BaseController
{
    public function index()
    {
        return view('pages/adminpage_view');
    }
}