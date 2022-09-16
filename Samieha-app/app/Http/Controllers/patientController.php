<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;

class patientController extends Controller
{
  
    public function index()
    {
        $data=patient::all();
        return view('patientProfile.patientTable')->with('data',$data);
    }

 
    public function create()
    {
      return view('patientProfile.createPatientProfile');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'p_email' => 'required',
            'p_password' => 'required',
            'national_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'birth_date' => 'required',
            'phone' => 'required',
            'nationality' => 'required',
            'region' => 'required',
            'city' => 'required',
            'diagnosis' => 'required',
            'characteristics' => 'required',
            'neurological_damage' => 'required',
            'severity' => 'required',
            'assesment_method' => 'required',
        ]);
      
        patient::create($request->all());
       
        return redirect()->route('patientTable.index')
                        ->with('success','تمت الإضافة بنجاح');
    }

 
    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy(patient $patient)
    {
        $patient->delete();
       
        return redirect()->route('patientTable.index')
                        ->with('success','Patient deleted successfully');
    }
}
