<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $title = 'Student List';
        $students = Student::all();

        return view('admin.student', compact('title', 'students'));
    }
}
