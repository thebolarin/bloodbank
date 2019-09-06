<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DonationRecord;
use Session;
use App\BloodGroup;
use App\DonorStatus;
use App\Exports\RecordsExport;
use Maatwebsite\Excel\Facades\Excel;

class RecordsController extends Controller
{
    public function index()
    {
      return view('admin.record.index')->with('record' , DonationRecord::all()) ;
                                     
                                     
    }

    public function export() 
    {
        return Excel::download(new RecordsExport, 'Donor.csv');
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blood = BloodGroup::all();
        $status = DonorStatus::all();
        if($blood->count()  == 0  || $status->count() == 0 )
        {
            Session::flash('info' , 'You must have some blood type and donor status before you can add a new blood stock'); 
           
            return redirect()->back();
        }
        return view('admin.record.create')->with('blood' ,  $blood )->with('status' ,  $status );
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
            'name'=>'required',
            'blood_id'=>'required',
            'status_id'=>'required',
            'date'=>'required',
            'time'=>'required',
            
        ]);
             
       

        $record = DonationRecord::create([
            'name' => $request->name,
            'blood_id' => $request->blood_id,
            'status_id' => $request->status_id,
            'date' => $request->date,
            'time' => $request->time,
           

           
      ]); 

    

            Session::flash('success' , 'New Donation record added successfully');

            return redirect()->route('record');

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
        $record= DonationRecord::find($id);

        return view('admin.record.edit')->with('record' , $record)
        ->with('status' , DonorStatus::all())
                                           ->with('blood' , BloodGroup::all());

               
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
        $record =DonationRecord::find($id);

        $this->validate($request , [
            'name'=>'required',
            'blood_id'=>'required',
            'status_id'=>'required',
            'date'=>'required',
            'time'=>'required',
            
        ]);
               
        
       
       
            $record->name = $request->name;
           
            $record->blood_id = $request->blood_id;
            $record->status_id = $request->status_id;
            $record->date = $request->date;
            $record->time = $request->time;
           

            $record->save();

           
      

     

            Session::flash('success' , 'Donation record updated  successfully');

            return redirect()->route('record');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = DonationRecord::find($id);
        $record->delete();
        Session::flash('success' , 'Deleted successfully');
  
        return redirect()->back();
    }

    
}

