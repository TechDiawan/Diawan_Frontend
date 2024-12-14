<?php

namespace App\Http\Controllers\Persona;

use App\Http\Controllers\Controller;

class PersonaAuthController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function login()
    {
        return view('persona.auth.login');
    }

    /**
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function register()
    {
        return view('persona.auth.register');
    }
}