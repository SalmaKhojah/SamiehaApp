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
            

              $sum=0;

              foreach(  $correct as  $correcst){
                  $sum=+1;
              }
              
              $summ=0;

              foreach(  $answare as  $answares){
                  $summ= $summ+1;
              }
              $avg_stars = $sum/$summ;
             
            if($avg_stars >= 0  and 5 >= $avg_stars){
                $suggestion = 200 ;
              }
              elseif($avg_stars >= 6  and 10 >= $avg_stars){
                  $suggestion = 150 ;
              }
              elseif($avg_stars >= 11  and 50 >= $avg_stars){
                  $suggestion = 50 ;
              }
              elseif($avg_stars >= 51){
                  $suggestion = 10 ;
              }
              else{
                  $suggestion = 2 ;
  
              }

           return view('SLP.patientProfile.patientResult', compact('resultp' , 'paitentName', 'avg_stars', 'suggestion'));  
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
  // $resultp = DB::select('SELECT * FROM session_material WHERE session_id IN (SELECT word FROM words WHERE words.word_id = word_id )');
//trial_id,word_id,patient_record,check_answer,used_cues, word
           //$resultp =  DB::select('SELECT * FROM results WHERE word_id IN (SELECT image AND word FROM words WHERE words.word_id = word_id )');
          // $avg_stars = DB::table('session_materials')
              //  ->avg('check_answer');

                //$wordCount = $correct->count();
             //$allans  = $answare->count();

                        //$viewPatient = DB::select('SELECT patients.* , email FROM patients, users WHERE users.id='.$id.' AND users_id='.$id.'');
           //$resultp =  DB::select('SELECT * FROM session_material WHERE  session_id= '.$id.'');