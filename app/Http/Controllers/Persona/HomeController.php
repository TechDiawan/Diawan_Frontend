<?php

namespace App\Http\Controllers\Persona;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('persona.home');
    }
}