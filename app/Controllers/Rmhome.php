<?php

namespace App\Controllers;

class Rmhome extends BaseController
{
    public function index()
    {

        if($this->session->sessiondata == "RM")
        {
        return view('pages/rmpage_view');
        }
        else
        {
        return view('pages/login_view');
        }
    }
}