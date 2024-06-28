<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\CheckRole;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch necessary data from the database
        $students = 30; // example data
        $faculty = 8; // example data
        $courses = 20; // example data
        $classes = 30; // example data

        // example schedule data
        $schedule = [
            ['time' => '7:00 - 8:00', 'course' => 'ITEC 222', 'section' => 'BSIT 2D', 'day' => 'M'],
            ['time' => '10:00 - 11:00', 'course' => 'ITEC 222', 'section' => 'BSIT 2D', 'day' => 'M'],
            ['time' => '1:00 - 2:00', 'course' => 'ITEC 222', 'section' => 'BSIT 2D', 'day' => 'M'],
            ['time' => '4:00 - 5:00', 'course' => 'ITEC 222', 'section' => 'BSIT 2A', 'day' => 'M'],
            ['time' => '1:00 - 2:00', 'course' => 'ITEC 222', 'section' => 'BSIT 2B', 'day' => 'W'],
            ['time' => '11:00 - 12:00', 'course' => 'ITEC 222', 'section' => 'BSIT 2E', 'day' => 'F'],
        ];

        return view('dashboard.admin', compact('students', 'faculty', 'courses', 'classes', 'schedule'));
    }
}
