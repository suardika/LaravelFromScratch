<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function  home()
    {
        $people = ['Taylor', 'Matt', 'Jeffrey'];
        return view('welcome', compact('people'));
    }

    public function about()
    {
        return 'About Page';
    }
}
