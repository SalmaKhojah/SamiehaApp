<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\session_material;
use App\Models\session;
use App\Models\words;
use Redirect;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class PatientResultController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           $resultp =  DB::select('SELECT session_materials.*, words.* FROM session_materials , words WHERE session_materials.word_id = words.id AND session_id='.$id.'');
           $paitentName= DB::select('SELECT first_name , last_name FROM patients , session WHERE  id='.$id.' AND patient_id = users_id ');
              $correct =  DB::select('SELECT check_answer FROM session_materials WHERE check_answer = '.'"صحيحة"'.' AND session_id='.$id.'');
              $answare =  DB::select('SELECT check_answer FROM session_materials WHERE session_id='.$id.'' );
            

          

           return view('SLP.patientProfile.patientResult', compact('resultp' , 'paitentName'));  
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
        $session=session::where('id',$id); 
        $session_material=session_material::where('session_id',$id)->first(); 

        $session->delete();
        $session_material->delete();

        return Redirect::back()->with('success','تم  حذف الجلسة بنجاح');

    }


   
}
 