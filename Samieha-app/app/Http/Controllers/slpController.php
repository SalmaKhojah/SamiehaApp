<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slp;

class slpController extends Controller
{
    
    public function index()
    {
        $data=slp::all();
        return view('slpTable')->with('data',$data);
    }

   
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

  
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
