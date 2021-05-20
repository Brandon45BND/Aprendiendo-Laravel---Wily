<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestinController extends Controller
{
    public function index(){
        return view('testing.hello');
    }
}
