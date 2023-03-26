<?php

namespace App\Controllers;

class Deleteuser extends BaseController
{
    public function index()
    {
    

    if($this->session->sessiondata == "Admin")
        {
            return view('pages/deleteuser_view');
        }
    else
        {
            return view('pages/login_view');
        }
    }
}
