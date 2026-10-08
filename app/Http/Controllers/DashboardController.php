<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Laravel\Prompts\title;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Admin Dashboard';
        $content = 'Welcome to the admin dashboard!';
        return view('admin.dashboard', compact('title','content'));
    }
}
