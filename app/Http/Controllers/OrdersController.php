<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Session;
use App\BloodGroup;
use Mail;


class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.orders.index')->with('order',Order::all());
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
            Session::flash('info' , 'You must have some blood type before you can add a new blood order'); 
           
            return redirect()->back();
        }
        return view('admin.orders.create')->with('blood' ,  $blood ) ;
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
            'email'=>'required',
            'blood_id'=>'required',
            'quantity'=>'required',
            'hospital'=>'required',
            'mobile'=>'required',
           
        ]);

        

         $order = Order::create([
                'name' => $request->name,
                'email' => $request->email,
                'blood_id'=>$request->blood_id,
                'quantity'=>$request->quantity,
                'hospital' => $request->hospital,
                'mobile' => $request->mobile,
                
         ]); 

          

       //Session::flash('success' , "Order succesfully placed");
       Mail::to($request->email)->send(new \App\Mail\Order);
    //    if(Mail::failures()){
       
    //     return redirect()->back()->with('status', "You successfully placed an order,you'll be contacted shortly");
    //    }
       
       return redirect()->back()->with('status', "You successfully placed an order,you'll be contacted shortly");
     
       
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
        $order = Order::find($id);

        return view('admin.orders.edit')->with('order' , $order)
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
        $order = Order::find($id);

        $this->validate($request , [
            'name'=>'required',
            'email'=>'required',
            'blood_id'=>'required',
            'quantity'=>'required',
            'hospital'=>'required',
            'mobile'=>'required',
           
        ]);


        $order->name = $request->name;
        $order->email = $request->email;
        $order->blood_id = $request->blood_id;
        $order->quantity = $request->quantity;
        $order->hospital = $request->hospital;
        $order->mobile = $request->mobile;

        $order->save();

       
        Session::flash('success' , 'You successfully updated  a blood order');
        return redirect()->route('orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
   
             $order->delete();

       
        
        Session::flash('success' , '  deleted succesfully ');
        return redirect()->route('orders');
    }
}
