<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slp_patients;
use App\Models\patient;
use App\Models\slp;
use Illuminate\Support\Facades\DB;

class paitentsList extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $deLinkPatient=slp_patients::where('patient_id',$request->patient_id); 
        $deLinkPatient->delete();


        $linkP=slp_patients::create([
            'slp_id'=>$request->slp_id,
            'patient_id'=>$request->patient_id,
        ]);

        return redirect()->back()
                        ->with('success','تم نقل المريض بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $allSlpsExceptCurrent = DB::select('SELECT F_slp_name , L_slp_name , id FROM slps WHERE id != '.$id.'');

        $currentSlpName = DB::select('SELECT F_slp_name , L_slp_name , id FROM slps WHERE slps.id= '.$id.'');
        
        $Plist = DB::select('SELECT first_name , last_name ,national_id , diagnosis , severity, id FROM patients WHERE id IN (SELECT patient_id FROM slp_patients WHERE patients.id = patient_id AND slp_id= '.$id.')');
        return view('slpProfile.paitentList', compact('Plist', 'currentSlpName' , 'allSlpsExceptCurrent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
