<?php

namespace App\Http\Controllers\Persona;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    /**
     * Show the My Profile page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('persona.myprofile');
    }
}
