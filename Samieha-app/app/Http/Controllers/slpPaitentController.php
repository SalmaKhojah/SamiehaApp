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
        $data = DB::select('SELECT * FROM patients WHERE users_id IN (SELECT patient_id FROM slp_patients WHERE patients.users_id = patient_id AND slp_id= '.Auth::user()->id.')');
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
            'email' => 'required',
            'password' => 'required',
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
            'email' => $request->email,
            'password' => $request->password,
        ]);

      
            $Patient=patient::create([
            'users_id'=>$User_p_id,
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

        // $slpId = DB::select('SELECT id , users_id FROM slps WHERE users_id = '.Auth::user()->id.'');
        // $SLPid=$slpId[0]->id;

        $linkPatient=DB::table('slp_patients')->insertGetId([
            'slp_id' => Auth::user()->id,
            'patient_id' => $Patient->users_id,
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
        $viewPatient = DB::select('SELECT patients.* , email FROM patients, users WHERE users.id='.$id.' AND users_id='.$id.'');
        $patientsession =  DB::select('SELECT * FROM session WHERE  patient_id= '.$id.'');
        return view('SLP.patientProfile.viewPatient', compact('viewPatient','patientsession'));     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editPatient = DB::select('SELECT patients.* , email , password FROM patients, users WHERE users.id='.$id.' AND users_id='.$id.'');
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
         $request->validate([
            'email' => 'required',
            'password' => 'required',
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

        User::whereId($id)->update(([
            'email'=>$request->email,
            'password'=>$request->password,
        ]));


        patient::where('users_id',$id)->update(([
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
        ]));

       
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
        $deLinkPatient=slp_patients::where('patient_id',$id); 
        $deLinkPatient->delete();

        return redirect()->route('slpPaitentTable.index')
                        ->with('success','تم  حذف المريض بنجاح');
    }
}
