<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\subcategories;
use App\Models\words;
use Illuminate\Support\Facades\DB;



class MaterialController extends Controller
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
        $Nounes = subcategories::where('category_id', 1)->get();
        $Verbs = subcategories::where('category_id', 2)->get();
        $Adjectives = subcategories::where('category_id', 3)->get();



        

dd($Nounes);
        $subcategory_id=subcategories::where('subcategory', $request->subcategory )->first();


        return view('uploadMaterial.uploadMat');
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
            'category'=>'required',
            'subcategory'=>'required',
            'word'=>'required',
            'image' => 'required',
                //semantic cue
            'cue1'=>'required',
                //sentence completion
            'cue2'=>'required',
                //first sound 
            'cue3'=>'required|audio',
                 //first syllable (spoken)
            'cue4'=>'required|audio',
                //first letter (written only)
            'cue5'=>'required',
                // written word (written only) 
            'cue6'=>'required',
                //spoken word(modeling) 
            'cue7'=>'required|audio',
        ]);


           $category_id=categories::where('category', $request->category )->first()->id;

           $subcategory_id=subcategories::where('subcategory', $request->subcategory )->first();

           if(isset($subcategory_id)){
            $subcategoryId=$subcategory_id->id; 
           }
           else{
             $subcategoryId=DB::table('subcategories')->insertGetId([
                 'subcategory'=>$request->subcategory,
                 'category_id'=>$category_id,
                ]); 
           }


            $pathImage = $request->file('image')->store('public/img/'.$request->category.'/'.$request->subcategory);
            $pathAudiocue3 = $request->file('cue3')->store('public/audio/'.$request->category.'/'.$request->subcategory);
            $pathAudiocue4 = $request->file('cue4')->store('public/audio/'.$request->category.'/'.$request->subcategory);
            $pathAudiocue7 = $request->file('cue7')->store('public/audio/'.$request->category.'/'.$request->subcategory);
           
            $word=words::create([
                'subcategory_id'=>$subcategoryId,
                'word'=>$request->word,
                'image'=>$pathImage,
                'cue1'=>$request->cue1,
                'cue2'=>$request->cue2,
                'cue3'=>$pathAudiocue3,
                'cue4'=>$pathAudiocue4,
                'cue5'=>$request->cue5,
                'cue6'=>$request->cue6,
                'cue7'=>$pathAudiocue7,
            ]);

      

    

        return redirect()->route('slpTable.index')
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
