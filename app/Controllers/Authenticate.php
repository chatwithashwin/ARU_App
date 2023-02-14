<?php

namespace App\Controllers;

class Authenticate extends BaseController
{
    public function index()
    {
        return view('pages/authenticate_view');
    }
}