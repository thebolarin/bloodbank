<?php

namespace App\Http\Controllers;
use App\Eligible;
use Session;


use Illuminate\Http\Request;

class EligibleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.eligible.index')->with('eligible' , Eligible::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('admin.eligible.create');
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
           
            'content'=>'required',
           
        ]);

        

         $eligible = Eligible::create([
                'title' => $request->title,
                'content' => $request->content,
               
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
        $eligible=Eligible::find($id);

        return view('admin.eligible.edit')->with('eligible', $eligible);
                                       
    
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
        $eligible = Eligible::find($id);

        $this->validate($request , [
            'title'=>'required',
           
            'content'=>'required',

           
        ]);

       

       
            $eligible->title = $request->title;
            $eligible->content = $request->content;
           
            
            $eligible->save();

           

            Session::flash('success' , 'Post updated successfully');




            return redirect()->route('eligible');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
     public function destroy($id)
    {
      $eligible = Eligible::find($id);
      $eligible->delete();
      Session::flash('success' , 'The post has been trashed');

      return redirect()->back();
    }

}
