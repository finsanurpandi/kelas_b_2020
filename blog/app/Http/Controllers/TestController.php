<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $new = '';

        $data['fruits'] = ['mangga', 'jeruk', 'apple'];
        $data['cars'] = ['Kijang', 'HRV'];

        return view('mahasiswa', $data);
    }
}
