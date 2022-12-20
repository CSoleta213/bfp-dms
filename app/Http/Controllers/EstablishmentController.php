<?php
  
namespace App\Http\Controllers;
   
use App\Models\Establishment;
use Illuminate\Http\Request;
  
class EstablishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $establishments = Establishment::latest()->paginate(5);
    
        return view('establishments.index',compact('establishments'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('establishments.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bin_ban_no' => 'required',
            'establishment_name' => 'required',
            'establishment_representative' => 'required',
            'address' => 'required',
            'contact_no' => 'required',
            'expiration_date' => 'required',
        ]);
    
        Establishment::create($request->all());
     
        return redirect()->route('establishments.index')
                        ->with('success','Establishment was added successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function show(Establishment $establishment)
    {
        return view('establishments.show',compact('establishment'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function edit(Establishment $establishment)
    {
        return view('establishments.edit',compact('establishment'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Establishment $establishment)
    {
        $request->validate([
            'bin_ban_no' => 'required',
            'establishment_name' => 'required',
            'establishment_representative' => 'required',
            'address' => 'required',
            'contact_no' => 'required',
            'expiration_date' => 'required',
        ]);
    
        $establishment->update($request->all());
    
        return redirect()->route('establishments.index')
                        ->with('success','Establishment details was updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Establishment $establishment)
    {
        $establishment->delete();
    
        return redirect()->route('establishments.index')
                        ->with('success','Establishment deleted successfully');
    }
}