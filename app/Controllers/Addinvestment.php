<?php

namespace App\Controllers;

class Addinvestment extends BaseController
{
    public function index()
    {

        if($this->session->sessiondata == "Admin")
        {
        return view('pages/addinvestment_view');
        }
        else
        {
        return view('pages/login_view');

        }
       
    }
}