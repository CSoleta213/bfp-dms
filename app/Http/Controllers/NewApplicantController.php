<?php
  
namespace App\Http\Controllers;
   
use App\Models\NewApplicant;
use Illuminate\Http\Request;
  
class NewApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $new_applicants = NewApplicant::latest()->paginate(5);
    
        return view('new-applicants.index',compact('new_applicants'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new-applicants.create');
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
        ]);
    
        NewApplicant::create($request->all());
     
        return redirect()->route('new-applicants.index')
                        ->with('success','New applicant was added successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\NewApplicant  $new_applicant
     * @return \Illuminate\Http\Response
     */
    public function show(NewApplicant $new_applicant)
    {
        return view('new-applicants.show',compact('new_applicant'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewApplicant  $new_applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(NewApplicant $new_applicant)
    {
        return view('new-applicants.edit',compact('new_applicant'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewApplicant  $new_applicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewApplicant $new_applicant)
    {
        $request->validate([
            'bin_ban_no' => 'required',
            'establishment_name' => 'required',
            'establishment_representative' => 'required',
            'address' => 'required',
            'contact_no' => 'required',
        ]);
    
        $new_applicant->update($request->all());
    
        return redirect()->route('new-applicants.index')
                        ->with('success',"Applicant's details was updated successfully.");
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewApplicant  $new_applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewApplicant $new_applicant)
    {
        $new_applicant->delete();
    
        return redirect()->route('new-applicants.index')
                        ->with('success','An applicant was deleted successfully.');
    }
}