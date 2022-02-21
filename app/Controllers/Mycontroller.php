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
}
