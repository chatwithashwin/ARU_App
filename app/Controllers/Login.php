<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('pages/login_view');
    }
}