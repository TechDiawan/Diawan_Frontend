<?php

namespace App\Http\Controllers\Persona;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonaSidebarController extends Controller
{
    public function getMenuItems()
    {
        $menuItems = [
            ['name' => 'Dashboard', 'route' => 'persona.home'],
            ['name' => 'Profile', 'route' => 'persona.myprofile'],
            ['name' => 'Competency', 'route' => 'persona.competency'],
            ['name' => 'E-Card', 'route' => 'persona.e-card'],
            // Add more Persona menu items here
        ];

        return view('persona.partials.sidebar', compact('menuItems'));
    }
}