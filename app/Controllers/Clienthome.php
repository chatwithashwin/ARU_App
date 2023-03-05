<?php

namespace App\Controllers;

class Clienthome extends BaseController
{
    public function index()
    {
        return view('pages/clientpage_view');
    }
}