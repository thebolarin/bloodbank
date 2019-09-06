<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BloodStock;
use Session;
use App\BloodGroup;


class StocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin.stocks.index')->with('stock' , BloodStock::all()) ;
      
                                       
                                     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blood = BloodGroup::all();
        if($blood->count()  == 0 )
        {
            Session::flash('info' , 'You must have some blood type before you can add a new blood stock'); 
           
            return redirect()->back();
        }
        return view('admin.stocks.create')->with('blood' ,  $blood ) ;
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
            'donor_name'=>'required',
            'blood_id'=>'required',
            
        ]);
             
       

        $stock = BloodStock::create([
            'donor_name' => $request->donor_name,
            'blood_id' => $request->blood_id,
           

           
      ]); 

    

            Session::flash('success' , 'New blood stock added  successfully');

            return redirect()->route('stocks');

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
        $stock=BloodStock::find($id);

        return view('admin.stocks.edit')->with('stock' , $stock)
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
        $stock =BloodStock::find($id);

        $this->validate($request , [
            'donor_name'=>'required',
            'blood_id'=>'required',
            
        ]);
               
        
       
       
            $stock->donor_name = $request->donor_name;
           
            $stock->blood_id = $request->blood_id;
           
           

            $stock->save();

           
      

     

            Session::flash('success' , 'Blood stock updated  successfully');

            return redirect()->route('stocks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stock = BloodStock::find($id);
        $stock->delete();
        Session::flash('success' , 'Deleted successfully');
  
        return redirect()->back();
    }

    
}

