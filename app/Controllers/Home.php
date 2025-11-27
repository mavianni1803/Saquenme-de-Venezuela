<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }


    public function newView(): string
    {
        return view('new_view');
    }
}