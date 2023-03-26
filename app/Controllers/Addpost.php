<?php

namespace App\Controllers;

class Addpost extends BaseController
{
    public function index()
    {

        if($this->session->sessiondata == "RM")
        {
        return view('pages/addpost_view');
        }
        else
        {
        return view('pages/login_view');
        }
    }
}
