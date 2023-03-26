<?php

namespace App\Controllers;

class Investmentdetails extends BaseController
{

    public function index()
    {
        //return view('pages/investmentdetails_view');
        if($this->session->sessiondata == "Admin" || $this->session->sessiondata == "Client" || $this->session->sessiondata == "RM")
        {
            return view('pages/investmentdetails_view');
        }
        else
        {
            return view('pages/login_view');
        }
    }

}
