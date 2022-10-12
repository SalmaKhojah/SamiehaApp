<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;
use App\Models\slp;
use App\Models\slp_patients;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\DB;

class slpPaitentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slpId = DB::select('SELECT id , users_id FROM slps WHERE users_id = '.Auth::user()->id.'');
        $id=$slpId[0]->id;
        $data = DB::select('SELECT * FROM patients WHERE id IN (SELECT patient_id FROM slp_patients WHERE patients.id = patient_id AND slp_id= '.$id.')');
        return view('SLP.slpPaitentsTable', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('SLP.patientProfile.createPatientProfile');

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

        $User_p_id=DB::table('users')->insertGetId([
            'role' => '1',
            'name' => $request->first_name,
            'email' => $request->p_email,
            'password' => $request->p_password,
        ]);

      
            $Patient=patient::create([
            'users_id'=>$User_p_id,
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

        $slpId = DB::select('SELECT id , users_id FROM slps WHERE users_id = '.Auth::user()->id.'');
        $SLPid=$slpId[0]->id;

        $linkPatient=DB::table('slp_patients')->insertGetId([
            'slp_id' => $SLPid,
            'patient_id' => $Patient->id,
        ]);
     
       
        return redirect()->route('slpPaitentTable.index')
                        ->with('success','تمت الإضافة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $viewPatient=patient::findOrFail($id); 
        return view('SLP.patientProfile.viewPatient')->with('viewPatient',$viewPatient);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editPatient=patient::findOrFail($id); 
        return view('SLP.patientProfile.editPatient')->with('editPatient',$editPatient);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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

       
        return redirect()->route('slpPaitentTable.index')
                        ->with('success','تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slpId = DB::select('SELECT id , users_id FROM slps WHERE users_id = '.Auth::user()->id.'');
        $SLPid=$slpId[0]->id;

        $deLinkPatient=slp_patients::where('patient_id',$id); 
        $deLinkPatient->delete();

        return redirect()->route('slpPaitentTable.index')
                        ->with('success','تم  حذف المريض بنجاح');
    }
}