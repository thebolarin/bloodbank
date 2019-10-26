<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;

use Session;
use Auth;
use Mail;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.appointments.index')->with('appointment',Appointment::all());
    }

    public function appointment()
    {

        $rec = Auth::guard('donor')->user()->name;
       
        $fetch= Appointment::where('name', '=', $rec )->get();
 
        
        return view('donor.appointments.index')->with('appoint',$fetch);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->guard('donor')->check()){
            
            return view('donor.appointments.create');
        }
    
        else{
            return redirect()->route('donor.login');
        }
      
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
          
            'date'=>'required',
            'time'=>'required',
           
        ]);

        $user =Auth::guard('donor')->user();

         $appointment = Appointment::create([
                'name' =>  $user->name,
                'email' =>  $user->email,
                'date' => $request->date,
                'time' => $request->time,
                
         ]); 

          

        Session::flash('success' , 'Appointment successful,wait for our mail');

        Mail::to($user->email)->send(new \App\Mail\newMail);
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
           
        $appointment = Appointment::find($id);

        return view('admin.appointments.edit')->with('appointment' , $appointment);
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
        $appointment = Appointment::find($id);

        $this->validate($request , [
            
            'date'=>'required',
            'time'=>'required',
            
        ]);

        $user = Auth::user();


        $appointment->name = $user->name;
        $appointment->email = $user->email;
        $appointment->date = $request->date;
        $appointment->time = $request->time;

        $appointment->save();

       
        Session::flash('success' , 'You successfully updated an appointment');
        return redirect()->route('appointments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointment =Appointment::find($id);

       

        $appointment->delete();

       
        
        Session::flash('success' , '  deleted succesfully ');
        return redirect()->route('appointments');
    }

    public function donordelete($id)
    {
        $appoint =Appointment::find($id);

        $appoint->delete();

        Session::flash('success' , ' Appointment cancelled succesfully ');
        return redirect()->route('appointment');
    }
}
