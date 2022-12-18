<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function establishments()
    {
        return view('establishments');
    }

    public function forRenewal()
    {
        return view('for-renewal');
    }

    public function newApplicant()
    {
        return view('new-applicant');
    }
}
