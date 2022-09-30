<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slp;
use App\Models\User;
use Illuminate\Support\Facades\DB;



class slpController extends Controller
{
    
    public function index()
    {
        $data=slp::all();
        return view('slpProfile.slpTable')->with('data',$data);
    }

   
    public function create()
    {
        return view('slpProfile.createSlpProfile');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'slp_email'=>'required',
            'slp_password'=>'required',
            'F_slp_name'=>'required',
            'L_slp_name'=>'required',
            'work_place'=>'required',
        ]);

        $User_slp_id=DB::table('users')->insertGetId([
            'role' => '2',
            'name' => $request->F_slp_name,
            'email' => $request->slp_email,
            'password' => $request->slp_password,
        ]);



        $Sllp=slp::create([
            'users_id'=>$User_slp_id,
            'slp_email'=>$request->slp_email,
            'slp_password'=>$request->slp_password,
            'F_slp_name'=>$request->F_slp_name,
            'L_slp_name'=>$request->L_slp_name,
            'work_place'=>$request->work_place,
        ]);

        return redirect()->route('slpTable.index')
        ->with('success','تمت الإضافة بنجاح');

    }

  
    public function show($id)
    {
     $viewslp = slp::findOrFail($id);
     return view('slpProfile.viewSlp')->with('viewslp',$viewslp);
    }

   
    public function edit($id)
    {
        $editSlp=slp::findOrFail($id); 
        return view('slpProfile.editSlp')->with('editSlp',$editSlp);
    }


    public function update(Request $request, $id)
    {
        $validatedData =  $request->validate([
            'slp_email'=>'required',
            'slp_password'=>'required',
            'F_slp_name'=>'required',
            'L_slp_name'=>'required',
            'work_place'=>'required',
        ]);
        
        slp::whereId($id)->update( $validatedData);

        return redirect()->route('slpTable.index')
                         ->with('success','تم التعديل بنجاح');
    }

  
    public function destroy($id)
    {
        $Slp=slp::find($id); 
        $Slp->delete();
        return redirect()->route('slpTable.index')
                        ->with('success','تم حذف الاختصاصي بنجاح');
    }
}
