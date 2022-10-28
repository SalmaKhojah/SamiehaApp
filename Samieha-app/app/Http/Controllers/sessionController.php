<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subcategories;
use App\Models\words;
use App\Models\session_material;
use App\Models\session;
use Illuminate\Support\Facades\DB;
use Auth;

class sessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $nounSub = subcategories::where('category_id', '1')->get();
        $verbSub = subcategories::where('category_id', '2')->get();
        $adjSub = subcategories::where('category_id', '3')->get();

        $data = DB::select('SELECT * FROM patients WHERE users_id IN (SELECT patient_id FROM slp_patients WHERE users_id = patient_id AND slp_id= '.Auth::user()->id.')');
      
           return view('SLP.createSession',compact('nounSub', 'verbSub' , 'adjSub','data'));
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

        $request->validate([
         'words'=>'required',
         'cues'=>'required',
         'patient_id'=>'required',
        ]);

        $session_id=DB::table('session')->insertGetId([
            'patient_id' => $request->patient_id,
            'slp_id' => Auth::user()->id,
            'time_limit' => '5',
        ]);

        $words=$request->words;

        foreach($words as $word){
            session_material::create([
                'session_id'=>$session_id,
                'word_id' => $word,
                'included_cues' => implode(",",$request->cues),
            ]);
        }

       return redirect()->route('session.index')
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
