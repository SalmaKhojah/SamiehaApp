<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\DB;

class patientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data=DB::select('SELECT email, first_name, last_name, national_id , diagnosis, severity, users_id FROM users, patients WHERE role=1 AND users.id=patients.users_id');
        return view('patientProfile.patientTable', compact('data'));
    }

 
    public function create()
    {
      return view('patientProfile.createPatientProfile');
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
            'national_id' => 'required|min:10|max:10|unique:patients,national_id',
            'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'birth_date' => 'required',
            'phone' => 'required',
            'nationality' => 'required|min:2',
            'region' => 'required|min:2',
            'city' => 'required|min:2',
            'diagnosis' => 'required|min:2',
            'characteristics' => 'required|min:2',
            'neurological_damage' => 'required|min:2',
            'severity' => 'required|min:2',
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
     
      
       
        return redirect()->route('patientTable.index')
                        ->with('success','تمت الإضافة بنجاح');
    }

 
    public function show($id)
    {
        $viewPatient = DB::select('SELECT patients.* , email FROM patients, users WHERE users.id='.$id.' AND users_id='.$id.'');
        return view('patientProfile.viewPatient')->with('viewPatient',$viewPatient);
    }

 
    public function edit($id)
    {
        $editPatient = DB::select('SELECT patients.* , users_id , email , password FROM patients, users WHERE users.id='.$id.' AND users_id='.$id.'');
        return view('patientProfile.editPatient')->with('editPatient',$editPatient);
    }


    public function update(Request $request,$id)
    {
         $request->validate([
            'email'=>['required',Rule::unique('users')->ignore($id)],
            'password'=>['required',Password::min(8)
            ->mixedCase()
            ->letters()
            ->numbers()
            ->symbols()],
            'national_id' => ['required','min:10','max:10',Rule::unique('patients')->ignore($id,'users_id')],
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
            'national_id'=>$request->national_id,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'birth_date'=>$request->birth_date,
            'phone'=>$request->phone,
            'nationality'=>$request->nationality,
            'region'=>$request->region,
            'city'=>$request->city,
            'diagnosis'=>$request->diagnosis,
            'characteristics'=>$request->characteristics,
            'neurological_damage'=>$request->neurological_damage,
            'severity'=>$request->severity,
            'assesment_method'=>$request->assesment_method,
        ]));

       
        return redirect()->route('patientTable.index')
                        ->with('success','تم التعديل بنجاح');
    }

 
    public function destroy($id)
    {

        $patient=patient::where('users_id',$id); 
        $user=User::where('id',$id); 
        $patient->delete();
        $user->delete();
        return redirect()->route('patientTable.index')
                        ->with('success','تم حذف المريض بنجاح');
    }
}
