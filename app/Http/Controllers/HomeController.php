<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Establishment;
use DB;

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
        $establishments = Establishment::latest()->paginate(5);
        $number_of_estab = DB::table('establishments')->count();
    
        return view('home',compact('establishments', 'number_of_estab'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
