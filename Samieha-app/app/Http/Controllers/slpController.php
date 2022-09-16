<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slp;

class slpController extends Controller
{
    
    public function index()
    {
        $slp=slp::all();
        return view('slpTable')->with('slp',$slp);
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
