<?php

namespace App\Controllers;

class Search extends BaseController
{
    public function index()
    {
        return view('pages/search_view');
    }
}