<?php

namespace App\Http\Controllers;
use App\About;
use Session;


use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.about.index')->with('about' , About::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      

        $this->validate($request , [
            'title'=>'required',
            'avatar'=>'required|image',
            'content'=>'required',
           
        ]);

         $avatar = $request->avatar;

         $avatar_new_name = time().$avatar->getClientOriginalName();

         $avatar->move('uploads/posts' ,  $avatar_new_name );

         $about = About::create([
                'title' => $request->title,
                'content' => $request->content,
                'avatar' => 'uploads/posts/' . $avatar_new_name,
                'slug'=>str_slug($request->title),
                
         ]); 

           

            Session::flash('success' , 'Post created successfully');




        return redirect()-> back();

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
        $about=About::find($id);

        return view('admin.about.edit')->with('about', $about);
                                       
    
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
        $about = About::find($id);

        $this->validate($request , [
            'title'=>'required',
           
            'content'=>'required',

           
        ]);

        if($request->hasFile('avatar'))
        {
            $avatar = $request->avatar;

            $avatar_new_name = time() . $avatar->getClientOriginalName();

            $avatar->move('uploads/posts' , $avatar_new_name);

            $about->avatar ='uploads/posts/'.$avatar_new_name;
        }

       
            $about->title = $request->title;
            $about->content = $request->content;
           
            
            $about->save();

           

            Session::flash('success' , 'Post updated successfully');




            return redirect()->route('about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
     public function destroy($id)
    {
      $about = About::find($id);
      $about->delete();
      Session::flash('success' , 'The post has been trashed');

      return redirect()->back();
    }

}
