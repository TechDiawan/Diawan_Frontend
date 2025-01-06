<?php

namespace App\Http\Controllers\Persona;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonaSidebarController extends Controller
{
    public function getMenuItems()
    {
        $menuItems = [
            ['name' => 'My Profile', 'route' => 'persona.myprofile'],
            ['name' => 'My Competency', 'route' => 'persona.competency'],
            ['name' => 'E-Card', 'route' => 'persona.e-card'],
            ['name' => 'Billing', 'route' => 'persona.billing'],
            ['name' => 'Account', 'route' => 'persona.account'],
            // Add more Persona menu items here
        ];

        return view('persona.partials.sidebar', compact('menuItems'));
    }
}