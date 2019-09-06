<?php

namespace App\Http\Controllers;
use App\DonationProcess;
use Session;


use Illuminate\Http\Request;

class DonationPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.donation.index')->with('donation' , DonationProcess::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('admin.donation.create');
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

         $donation = DonationProcess::create([
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
        $donation= DonationProcess::find($id);

        return view('admin.donation.edit')->with('donation', $donation);
                                       
    
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
        $donation = DonationProcess::find($id);

        $this->validate($request , [
            'title'=>'required',
           
            'content'=>'required',

           
        ]);

        if($request->hasFile('avatar'))
        {
            $avatar = $request->avatar;

            $avatar_new_name = time() . $avatar->getClientOriginalName();

            $avatar->move('uploads/posts' , $avatar_new_name);

            $donation->avatar ='uploads/posts/'.$avatar_new_name;
        }

       
            $donation->title = $request->title;
            $donation->content = $request->content;
           
            
            $donation->save();

           

            Session::flash('success' , 'Post updated successfully');




            return redirect()->route('donation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
     public function destroy($id)
    {
      $donation = DonationProcess::find($id);
      $donation->delete();
      Session::flash('success' , 'The post has been trashed');

      return redirect()->back();
    }

}
