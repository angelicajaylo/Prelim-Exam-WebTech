<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view("about");
    }

    public function projects()
    {
        return view("projects");
    }

    public function experience()
    {
        return view("experience");
    }
    public function contacts()
    {
        return view("contacts");
    }
}
