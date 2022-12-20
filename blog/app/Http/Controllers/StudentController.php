<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Department;
use App\Models\User;
use App\Http\Requests\StoreLectureRequest;

use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
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

    public function sentEmail()
    {
        $user = User::find(1);

        $receiver = [
            'admin1@email.com',
            'admin2@email.com',
            'admin3@email.com',
        ];
        Mail::to($receiver)->queue(new TestMail($user));

        return redirect()->back();
    }
}
