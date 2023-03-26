<?php

namespace App\Controllers;

class Deleteinvestment extends BaseController
{
    public function index()
    {

        if($this->session->sessiondata == "Admin")
        {
        return view('pages/deleteinvestment_view');
        }
        else
        {
        return view('pages/login_view');

        }

        
    }
}
