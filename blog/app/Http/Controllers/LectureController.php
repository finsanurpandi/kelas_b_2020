<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecture;
use Session;
use App\Http\Requests\StoreLectureRequest;

class LectureController extends Controller
{
    public function index()
    {
        $data['lectures'] = Lecture::all();

        return view('lecture.index')->with($data);
    }

    public function create()
    {
        return view('lecture.create');
    }

    public function store(StoreLectureRequest $request)
    {
        // $validated = $request->validate([
        //     'nidn' => 'required|min:10|numeric',
        //     'nama' => 'required|max:15'
        // ]);

        Lecture::create($request->validated());

        Session::flash('status', 'Input Data Berhasil');
        return redirect('lecture');
    }
}
