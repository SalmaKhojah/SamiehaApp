<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slp_patients;
use App\Models\patient;
use App\Models\slp;
use Auth;
use Illuminate\Support\Facades\DB;

class SlpLinksPaitentController extends Controller
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
        $LinkedSLP=null;
        $slpId = DB::select('SELECT id , users_id FROM slps WHERE users_id = '.Auth::user()->id.'');
        $slp=$slpId[0]->id;

        $paitentExcepCuur = DB::select('SELECT first_name , last_name , id FROM patients WHERE id NOT IN (SELECT patient_id FROM slp_patients WHERE patients.id = patient_id AND slp_id='.$slp.')');

        return view('SLP.patientProfile.linkPaitent', compact('paitentExcepCuur','slp', 'LinkedSLP'));
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
            'slp_id' => 'required',
            'patient_id' => 'required',
        ]);

        $LinkedP = DB::select('SELECT first_name , last_name , id FROM patients WHERE id  IN (SELECT patient_id FROM slp_patients WHERE patients.id = patient_id)');

        $slpId = DB::select('SELECT id , users_id FROM slps WHERE users_id = '.Auth::user()->id.'');
        $slp=$slpId[0]->id;

        $paitentExcepCuur = DB::select('SELECT first_name , last_name , id FROM patients WHERE id NOT IN (SELECT patient_id FROM slp_patients WHERE patients.id = patient_id AND slp_id='.$slp.')');
        
        $compare=$request->patient_id;


        foreach( $LinkedP as $item)
        {
            $compared=$item->id;

            if($compare == $compared)
            {
              $LinkedSLP = DB::select('SELECT F_slp_name , L_slp_name , slp_email , work_place , id FROM slps WHERE id  IN (SELECT slp_id FROM slp_patients WHERE slps.id=slp_id AND  patient_id='.$compare.')');

                return view('SLP.patientProfile.linkPaitent', compact('paitentExcepCuur','slp' , 'LinkedSLP'));

                // return redirect()->route('slpLinkP.create')
                // ->with('success','المريض تابع للاختصاصي');
            }
        }

     
            $linkP=slp_patients::create([
                'slp_id'=>$request->slp_id,
                'patient_id'=>$request->patient_id,
            ]);
    
            return redirect()->route('slpLinkP.create')
            ->with('success','تم الربط بنجاح');
    



 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
