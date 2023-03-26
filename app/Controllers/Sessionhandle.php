<?php

namespace App\Controllers;

class Sessionhandle extends BaseController
{
    public function index()
    {
       // $username = parse_str($_SERVER['username'],$_GET);
        $this->session->set('sessiondata','Admin');
        //return redirect()->redirect("./adminhome?username=",$username);
        return view('pages/session_view');
    }
}