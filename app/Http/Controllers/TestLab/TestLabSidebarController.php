<?php

namespace App\Http\Controllers\TestLab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestLabSidebarController extends Controller
{
    public function getMenuItems()
    {
        $menuItems = [
            'Admin' => [
                ['name' => 'Manage Skill Type', 'route' => 'admin.manage-skill-type'],
                ['name' => 'Manage Skill', 'route' => 'admin.manage-skill'],
                ['name' => 'Question Bank', 'route' => 'admin.question-bank'],
                ['name' => 'Participants', 'route' => 'admin.participants'],
                ['name' => 'Skill HeatMap', 'route' => 'admin.skillheatmap'],
            ],
        ];

        return view('testlab.partials.sidebar', compact('menuItems'));
    }
}
