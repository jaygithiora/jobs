<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index(){
        return view('admin.home');
    }

    public function schools(){
        return view('admin.schools');
    }

    public function schoolTypes(){
        return view('admin.school_types');
    }

    public function countries(){
        return view('admin.countries');
    }
}
