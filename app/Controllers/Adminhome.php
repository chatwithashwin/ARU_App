<?php

namespace App\Controllers;

class Adminhome extends BaseController
{
    public function index()
    {
        if($this->session->sessiondata == "Admin")
        {
        return view('pages/adminpage_view');
        }
        else
        {
        return view('pages/login_view');
        }
       
    }
}