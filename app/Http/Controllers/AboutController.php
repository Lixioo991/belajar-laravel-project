<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $title = 'About';
        $content = 'Nama : Abellian Yoda<br>Hobby : Mancing<br>Akun Github : Lixioo991';

        return view('admin.about', compact('title', 'content'));
    }
}
