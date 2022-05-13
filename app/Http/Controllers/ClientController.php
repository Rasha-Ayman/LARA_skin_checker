<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{   

    public function index()
    {
        return view('clients.home');
    }

    public function home()
    {
        return view('clients.home');
    }
    public function about()
    {
        return view('clients.about');
    }
    public function service()
    {
        return view('clients.service');
    }
    public function gallery()
    {
        return view('clients.gallery');
    }
    public function team()
    {
        return view('clients.team');
    }
    public function appointment()
    {
        return view('clients.appointment');
    }
    public function blog()
    {
        return view('clients.blog');
    }
    public function contact()
    {
        return view('clients.contact');
    }
    public function sign()
    {
        return view('clients.sign');
    }
    public function login()
    {
        return view('clients.login');
    }
    public function try()
    {
        return view('clients.try');
    }
}
