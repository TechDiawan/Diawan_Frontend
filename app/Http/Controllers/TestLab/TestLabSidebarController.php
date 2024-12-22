<?php

namespace App\Http\Controllers\TestLab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestLabSidebarController extends Controller
{
    public function getMenuItems()
    {
        $menuItems = [
            ['name' => 'Dashboard', 'route' => 'testlab.dashboard'],
            //['name' => 'Question Bank', 'route' => 'testlab.questionbank'],
            // Add more TestLab menu items here
        ];

        return view('testlab.partials.sidebar', compact('menuItems'));
    }
}