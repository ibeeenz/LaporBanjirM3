<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            [
                'name' => 'Ibnu Rafif',
                'major' => 'Smaart City Information System',
                'age' => 20,
                'courses' => ['Pemograman Web', 'Database', 'Pemograman Mobile', 'Pemograman Berbasis Framework'],
            ],
            [
                'name' => 'Iben Ganteng',
                'major' => 'Internasional Relation',
                'age' => 25,
                'courses' => ['hubungan Internasional', 'Politik', 'Ekonomi', 'Sosiologi'],
            ],
        ];

        return view('students.index', compact('students'));
    }
}
