<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slp_patients;
use App\Models\patient;
use App\Models\slp;
use Illuminate\Support\Facades\DB;





class linkPaitent extends Controller
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
        $NotLinkedP = DB::select('SELECT first_name , last_name ,national_id, users_id FROM patients WHERE users_id NOT IN (SELECT patient_id FROM slp_patients WHERE users_id = patient_id)');
        $slps = DB::select('SELECT email, F_slp_name , L_slp_name , users_id FROM slps, users WHERE users_id=id AND role=2');
        return view('linkPaitents.linkPaitent', compact('NotLinkedP', 'slps'));
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

        $linkP=slp_patients::create([
            'slp_id'=>$request->slp_id,
            'patient_id'=>$request->patient_id,
        ]);

        return redirect()->route('link.create')
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
