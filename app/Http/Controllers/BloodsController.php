<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BloodGroup;
use Session;

class BloodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.blood.index')->with('bloods',BloodGroup::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blood.create');
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
            'blood_group'=>'required',
            'price'=>'required',
           
        ]);

        

         $blood = BloodGroup::create([
                'blood_group' => $request->blood_group,
                'price' => $request->price,
                
         ]); 

          

        Session::flash('success' , 'You successfully created a blood group');
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
        $blood = BloodGroup::find($id);

        return view('admin.blood.edit')->with('blood' , $blood);
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
        $blood = BloodGroup::find($id);
        $blood->blood_group = $request->blood_group;
        $blood->price = $request->price;

        $blood->save();

       
        Session::flash('success' , 'You successfully updated a blood group');
        return redirect()->route('blood');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blood =BloodGroup::find($id);

       

        $blood->delete();

       
        
        Session::flash('success' , ' Blood group deleted succesfully ');
        return redirect()->route('blood');
    }
}
