<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\DonorPro;
use App\Bloodgroup;
use App\DonorStatus;


class DonorProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('donor.profileedit')->with('donor' , Auth::guard('donor')->user())
        ->with('blood' , BloodGroup::all())
        ->with('status' ,DonorStatus::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            
        ]);

        $donor = Auth::guard('donor')->user();

        if($request->hasFile('avatar'))
        {
            $avatar = $request->avatar;

            $avatar_new_name = time() . $avatar->getClientOriginalName();

            $avatar->move('donor', $avatar_new_name);

            $donor->profile->avatar ='donor/'.$avatar_new_name;

            $donor->profile->save();
        }

        $donor->name = $request->name;
        $donor->email = $request->email;
        $donor->profile->gender = $request->gender;
        $donor->profile->contact_number = $request->contact_number;
        $donor->profile->blood_id = $request->blood_id;
        $donor->profile->address = $request->address;
        $donor->profile->status_id = $request->status_id;
       
      
        
        $donor->save();
        $donor->profile->save();

        if($request->has('password'))
        {
            $donor->password = bcrypt($request->password);
        }

       

        Session::flash('success' , ' Account Profile updated ');




       return redirect()->back();

        

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
