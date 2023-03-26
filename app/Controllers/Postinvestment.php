<?php

namespace App\Controllers;

class Postinvestment extends BaseController
{
    public function index()
    {
    
        if($this->session->sessiondata == "RM")
        {
        return view('pages/postpage_view');
        }
        else
        {
        return view('pages/login_view');
        }
    }
}
