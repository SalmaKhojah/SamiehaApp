<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use App\Models\slp;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SlpProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
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
        $viewslp = DB::select('SELECT slps.* , email FROM slps, users WHERE users.id='.$id.' AND users_id='.$id.'');
        $data=DB::select('SELECT email, F_slp_name, L_slp_name, work_place , users_id as id FROM users, slps WHERE role=2 AND users.id=slps.users_id');

        return view('SLP.patientProfile.slpprofile', compact('viewslp', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editSlp = DB::select('SELECT slps.* , users_id as id  , email , password FROM slps, users WHERE users.id='.$id.' AND users_id='.$id.'');
        return view('SLP.patientProfile.slpEditProfile', compact('editSlp'));
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
            'email'=>['required',Rule::unique('users')->ignore($id)],
            'password'=>['required',Password::min(8)
            ->mixedCase()
            ->letters()
            ->numbers()
            ->symbols()],
            'F_slp_name'=>'required|min:2',
            'L_slp_name'=>'required|min:2',
            'work_place'=>'required|min:2',
        ]);
        
        User::whereId($id)->update(([
            'email'=>$request->email,
            'password'=>$request->password,
        ]));



        slp::where('users_id',$id)->update(([
            'F_slp_name'=>$request->F_slp_name,
            'L_slp_name'=>$request->L_slp_name,
            'work_place'=>$request->work_place,
        ]));

        return redirect()->back()
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
        //
    }
}
