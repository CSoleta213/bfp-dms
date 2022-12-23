<?php

namespace App\Http\Controllers;

use App\Models\Establishment;
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
        $establishments = Establishment::latest()->paginate(5);
    
        return view('new-applicants',compact('establishments'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
