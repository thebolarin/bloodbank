<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DonorStatus;
use Session;

class StatusController extends Controller
{
    public function index()
    {
        return view('admin.status.index')->with('status',DonorStatus::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.status.create');
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
            'status'=>'required',
            
        ]);

        

         $status = DonorStatus::create([
                'status' => $request->status,
               
                
         ]); 

          

        Session::flash('success' , 'You successfully created a donor status');
        return redirect()->back();
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
        $status = DonorStatus::find($id);

        return view('admin.status.edit')->with('status' , $status);
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
        $status = DonorStatus::find($id);
        $status->status = $request->status;
       

        $status->save();

       
        Session::flash('success' , 'You successfully updated a donor status');
        return redirect()->route('status');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = DonorStatus::find($id);

       

        $status->delete();

       
        
        Session::flash('success' , ' Donor status deleted succesfully ');
        return redirect()->route('status');
    }
}
