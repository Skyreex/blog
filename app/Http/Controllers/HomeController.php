<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function bmi()
    {
        return view('bmi');
    }
    public function convertisseur()
    {
        return view('convertisseur');
    }
    public function mensualite()
    {
        return view('mensualite');
    }
}
