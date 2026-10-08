<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = 'Student';
        $students = [
            [
                'nis' => '240001',
                'name' => 'ABELLIAN YODA',
                'classroom' => 'X PPLG 1',
                'status' => 'Active',
            ],
            [
                'nis' => '240002',
                'name' => 'Adista Raka Pramudya',
                'classroom' => 'X PPLG 1',
                'status' => 'Active',
            ],
            [
                'nis' => '240003',
                'name' => 'Ahmad Kenzie Javas Niscala',
                'classroom' => 'X PPLG 1',
                'status' => 'Inactive',
            ],
            [
                'nis' => '240004',
                'name' => 'Al Fatih Diar Hanif',
                'classroom' => 'X PPLG 1',
                'status' => 'Active',
            ],
            [
                'nis' => '240005',
                'name' => 'Anisa Mutiara Tunggadewi',
                'classroom' => 'X PPLG 1',
                'status' => 'Inactive',
            ],
            [
                'nis' => '240006',
                'name' => 'Arga Pramudya Yusuf',
                'classroom' => 'X PPLG 1',
                'status' => 'Active',
            ],
            [
                'nis' => '240007',
                'name' => 'Athallah Bayanaka Montazar',
                'classroom' => 'X PPLG 1',
                'status' => 'Active',
            ],
            [
                'nis' => '240008',
                'name' => 'Bhumi Aqiel Magrabhi',
                'classroom' => 'X PPLG 1',
                'status' => 'Inactive',
            ],
            [
                'nis' => '240009',
                'name' => 'Canezares Keandre Arkana Totiro',
                'classroom' => 'X PPLG 1',
                'status' => 'Active',
            ],
            [
                'nis' => '240010',
                'name' => 'Daneal Rahmat Magrabi',
                'classroom' => 'X PPLG 1',
                'status' => 'Active',
            ],
        ];

        return view('admin.student', compact('title', 'students'));
    }
}
