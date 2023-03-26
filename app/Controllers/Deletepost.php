<?php

namespace App\Controllers;

class Deletepost extends BaseController
{
    public function index()
    {

        if($this->session->sessiondata == "RM")
        {
        return view('pages/deletepost_view');
        }
        else
        {
        return view('pages/login_view');
        }      
    }
}
