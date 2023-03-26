<?php

namespace App\Controllers;

class Adduser extends BaseController
{

    if($this->session->sessiondata == "Admin")
    {
    return view('pages/adduser_view');
    }
    else
    {
    return view('pages/login_view');
    }
}
