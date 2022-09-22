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
        $viewPatient=patient::findOrFail($id); 
        return view('patientProfile.viewPatient')->with('viewPatient',$viewPatient);
    }

 
    public function edit($id)
    {
        $editPatient=patient::findOrFail($id); 
        return view('patientProfile.editPatient')->with('editPatient',$editPatient);
    }


    public function update(Request $request,$id)
    {
        $validatedData = $request->validate([
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

        patient::whereId($id)->update($validatedData);

       
        return redirect()->route('patientTable.index')
                        ->with('success','تم التعديل بنجاح');
    }

 
    public function destroy($id)
    {
        $patient=patient::find($id); 
        $patient->delete();
       
        return redirect()->route('patientTable.index')
                        ->with('success','تم حذف المريض بنجاح');
    }
}
