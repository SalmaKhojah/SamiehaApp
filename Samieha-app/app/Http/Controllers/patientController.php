<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
        $last_user_id = DB::table('users')->latest('id')->first();
        $g=$last_user_id->id;
        //$last_user_id=DB::select('SELECT id FROM users ORDER BY created_at DESC LIMIT 1');
        $next_user_id=$g++;
        
        $request->validate([
            'users_id'=>'required',
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

        $User_p=User::create([
            'role' => '1',
            'name' => $request->first_name,
            'email' => $request->p_email,
            'password' => $request->p_password,
        ]);
      
            $Patient=patient::create([
            'users_id'=>$next_user_id,
            'p_email' => $request->p_email,
            'p_password' => $request->p_password,
            'national_id' => $request->national_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'birth_date' => $request->birth_date,
            'phone' => $request->phone,
            'nationality' => $request->nationality,
            'region' => $request->region,
            'city' => $request->city,
            'diagnosis' => $request->diagnosis,
            'characteristics' => $request->characteristics,
            'neurological_damage' => $request->neurological_damage,
            'severity' => $request->severity,
            'assesment_method' => $request->assesment_method,
        ]);
     
      
       
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
