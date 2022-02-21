<?php

namespace App\Controllers;

class Mycontroller extends BaseController
{

    public function home()
    {
        return view("home");
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
