<?php

namespace App\Controllers;

class Clienthome extends BaseController
{
    public function index()
    {

        if($this->session->sessiondata == "Client")
        {
        return view('pages/clientpage_view');
        }
        else
        {
        return view('pages/login_view');
        }
    }
}