<?php

namespace App\Http\Controllers\TestLab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestLabSidebarController extends Controller
{
    public function getMenuItems()
    {
        $menuItems = [
            'Talent' => [
                ['name' => 'Dashboard', 'route' => 'testlab.dashboard'],
                ['name' => 'My Skill List', 'route' => 'testlab.myskills'],
            ],
            'Admin' => [
                ['name' => 'Manage Skill Type', 'route' => 'admin.manage-skill-type'],
                ['name' => 'Manage Skill', 'route' => 'admin.manage-skill'],
                ['name' => 'Question Bank', 'route' => 'admin.question-bank'],
            ],
        ];

        return view('testlab.partials.sidebar', compact('menuItems'));
    }
}
