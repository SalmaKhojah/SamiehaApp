<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\subcategories;
use App\Models\words;



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
            'category'=>'required|string',
            'subcategory'=>'required|string',
            'word'=>'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
                //semantic cue
            'cue1'=>'required|string',
                //sentence completion
            'cue2'=>'required|string',
                //first sound 
            'cue3'=>'required|audio|duration_min:5|duration_max:50|codec:mp3,pcm_s16le',
                //first letter (written only)
            'cue4'=>'required|string',
                //first syllable (spoken)
            'cue5'=>'required|string',
                // written word (written only) 
            'cue6'=>'required|string',
                //spoken word(modeling) 
            'cue7'=>'required|audio|duration_min:10|duration_max:100|codec:mp3,pcm_s16le',
        ]);

        $category_id=DB::table('categories')->insertGetId([
         'category'=>$request->category,
        ]);

        $subcategory_id=DB::table('subcategories')->insertGetId([
            'subcategory'=>$request->subcategory,
            'category_id'=>$category_id,
           ]);
           
           if($category_id===1)
           {$pathImage = $request->file('image')->store('public/img/nouns');
           $pathAudiocue3 = $request->file('cue3')->store('public/audio/nouns');
           $pathAudiocue5 = $request->file('cue5')->store('public/audio/nouns');
           $pathAudiocue7 = $request->file('cue7')->store('public/audio/nouns');}
           else
           if($category_id===2)
           {$pathImage = $request->file('image')->store('public/img/verbs');
           $pathAudiocue3 = $request->file('cue3')->store('public/audio/verbs');
           $pathAudiocue5 = $request->file('cue5')->store('public/audio/verbs');
           $pathAudiocue7 = $request->file('cue7')->store('public/audio/verbs');}
           else
           if($category_id===3)
          { $pathImage = $request->file('image')->store('public/img/adjectives');
           $pathAudiocue3 = $request->file('cue3')->store('public/audio/adjectives');
           $pathAudiocue5 = $request->file('cue5')->store('public/audio/adjectives');
           $pathAudiocue7 = $request->file('cue7')->store('public/audio/adjectives');}
           else
           { $pathImage = $request->file('image')->store('public/img/'.$request->category);
            $pathAudiocue3 = $request->file('cue3')->store('public/audio/'.$request->category);
            $pathAudiocue5 = $request->file('cue5')->store('public/audio/'.$request->category);
            $pathAudiocue7 = $request->file('cue7')->store('public/audio/'.$request->category);}

        $word=words::create([
            'subcategory_id'=>$subcategory_id,
            'word'=>$request->word,
            'image'=>$pathImage,
            'cue1'=>$request->cue1,
            'cue2'=>$request->cue2,
            'cue3'=>$request->pathAudiocue3,
            'cue4'=>$request->cue4,
            'cue5'=>$request->pathAudiocue5,
            'cue6'=>$request->cue6,
            'cue7'=>$request->pathAudiocue7,
        ]);
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
