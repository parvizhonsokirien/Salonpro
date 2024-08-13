<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function salon()
    {
        return view('salon.index');
    }

    public function index()
    {
        return view('main.index');
    }


    public function about()
    {
        return view('main.about');
    }


    public function service()
    {
        return view('main.service');
    }

    public function contact()
    {
        return view('main.contact');
    }

    public function pricing()
    {
        return view('main.pricing');
    }

    public function barbers()
    {
        return view('main.barbers');
    }
}
