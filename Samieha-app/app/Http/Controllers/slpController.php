<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slp;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\DB;



class slpController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data=DB::select('SELECT email, F_slp_name, L_slp_name, work_place , users_id as id FROM users, slps WHERE role=2 AND users.id=slps.users_id');
        return view('slpProfile.slpTable', compact('data'));
    }

   
    public function create()
    {
        return view('slpProfile.createSlpProfile');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'email'=>'required|unique:users,email',
            'password'=>['required',Password::min(8)
            ->mixedCase()
            ->letters()
            ->numbers()
            ->symbols()],
            'F_slp_name'=>'required|min:2|max:15',
            'L_slp_name'=>'required|min:2|max:15',
            'work_place'=>'required|min:2|max:15',
        ]);

        $User_slp_id=DB::table('users')->insertGetId([
            'role' => '2',
            'name' => $request->F_slp_name,
            'email' => $request->email,
            'password' => $request->password,
        ]);



        $Sllp=slp::create([
            'users_id'=>$User_slp_id,
            'F_slp_name'=>$request->F_slp_name,
            'L_slp_name'=>$request->L_slp_name,
            'work_place'=>$request->work_place,
        ]);

        return redirect()->route('slpTable.index')
        ->with('success','تمت الإضافة بنجاح');

    }

  
    public function show($id)
    {
     $viewslp = DB::select('SELECT slps.* , email FROM slps, users WHERE users.id='.$id.' AND users_id='.$id.'');
     return view('slpProfile.viewSlp', compact('viewslp'));
    }

   
    public function edit($id)
    {
        $editSlp = DB::select('SELECT slps.* , users_id as id  , email , password FROM slps, users WHERE users.id='.$id.' AND users_id='.$id.'');
        return view('slpProfile.editSlp', compact('editSlp'));
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'email'=>['required',Rule::unique('users')->ignore($id)],
            'password'=>['required',Password::min(8)
            ->mixedCase()
            ->letters()
            ->numbers()
            ->symbols()],
            'F_slp_name'=>'required|min:2|max:15',
            'L_slp_name'=>'required|min:2|max:15',
            'work_place'=>'required|min:2|max:15',
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

        return redirect()->route('slpTable.index')
                         ->with('success','تم التعديل بنجاح');
    }

  
    public function destroy($id)
    {
        $Slp=slp::where('users_id',$id); 
        $user=User::where('id',$id); 
        $Slp->delete();
        $user->delete();
        return redirect()->route('slpTable.index')
                        ->with('success','تم حذف الاختصاصي بنجاح');
    }

    //ghada 
    public function home()
    {
        return view('SLP.home');
    }
}
