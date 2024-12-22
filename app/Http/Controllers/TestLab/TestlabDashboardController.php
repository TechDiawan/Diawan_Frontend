<?php

namespace App\Http\Controllers\TestLab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestlabDashboardController extends Controller
{
    public function index()
    {
        return view('testlab.dashboard');
    }
}
