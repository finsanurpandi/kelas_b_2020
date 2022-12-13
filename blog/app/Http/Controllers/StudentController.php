<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Department;
use App\Http\Requests\StoreLectureRequest;
use Session;

class StudentController extends Controller
{
    public function index()
    {
        // $data['students'] = Student::all();
        $data['students'] = Student::with('lecture')->get();
        $data['department'] = Student::with('department')->where('npm', '5520120995')->first();

        return view('student.index')->with($data);
    }
}
