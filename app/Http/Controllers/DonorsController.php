<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\DonorsExport;
use Maatwebsite\Excel\Facades\Excel;

use App\Blood;
use App\Donor;
use Session;
use Auth;
use App\DonationRecord;

class DonorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin.donors.index')->with('donors' , Donor::all()) ;
                                    
    }

    public function export() 
    {
        return Excel::download(new DonorsExport, 'Donor.csv');
        
    }

   

    


    public function fetch(){

        $rec = Auth::guard('donor')->user()->name;
       
        $fetch= DonationRecord::where('name', '=', $rec )->get();
 
         return view('donor.record')->with('fetch' , $fetch);
      }
      
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('admin.donors.create') ;
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
            'email'=>'required|email',
           
            
        ]);

       

        $donor = Donor::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('bolarin')
           
      ]); 

    

            Session::flash('success' , 'Donor added  successfully');

            return redirect()->route('donor');

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
        $donor=Donor::find($id);

        return view('admin.donors.edit')->with('donors', $donor)
                                       
                                       ;

              
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
        $donor = Donor::find($id);

        $this->validate($request , [
            'name'=>'required',
            'email'=>'required|email',
           
           
        
        ]);
               
       
       
            $donor->name = $request->name;
            $donor->email =$request->email;
            if($request->has('password'))
            {
                $user->password = bcrypt($request->password);
            }
          
           

            $donor->save();

           
      

     

            Session::flash('success' , 'Donor updated  successfully');

            return redirect()->route('donor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donor = Donor::find($id);
        $donor->delete();
        Session::flash('success' , 'Trashed successfully');
  
        return redirect()->back();
    }

    public function trash()
    {
      $donors = Donor::onlyTrashed()->get();
     // dd($posts);
     return view('admin.donors.trashed')->with('donors' , $donors);
    }

    public function kill ($id)
    {
       $donor= Donor::withTrashed()->where('id',$id)->first();
      
       $donor->forceDelete();

       Session::flash('success' , 'Donor deleted permanently');

       return redirect()->back();
    }

    public function restore ($id)
    {
        $donor= Donor::withTrashed()->where('id',$id)->first();
      
        $donor->restore();
 
        Session::flash('success' , 'Donor restored successfully');
 
        return redirect()->route('donor');  
    }

    public function donor($id)
    {
        $donor = Donor::find($id);

        $donor->donor = 1;
        $donor->save();

        Session::flash('success' , 'Successfully changed user permission.');

        return redirect()->back();
    }

    public function not_donor($id)
    {
        $donor = Donor::find($id);

        $donor->donor = 0;
        $donor->save();

        Session::flash('success' , 'Successfully changed donor permission.');

        return redirect()->back();
    }
}
