@extends('layouts.donor-app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       

            
                @if(Auth::guard('donor')->user()->donor)
                {{-- <h1>Welcome,</h1><h4>{{Auth::guard('donor')->user()->name}}</h4> --}}

                {{-- <div class="panel panel-default">
                        <div class="panel-heading">Dashboard</div>
        
                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
        
                            You are logged in!
                        </div>
                    </div> --}}
            <div class="col-md-4">
                <div class="card" style=";border-radius:20px;box-shadow: 0px 2px 8px 0px rgba(50, 50, 50, 0.09);">  
                   
                    <div class="card-body">
                       
                            
                                    <p class="card-title">Donation record</p>
                                    <h4>3000</h4>
                                        <p class="card-text">
                                        <a href="#" class=" " style="color:#F93822ff;font-weight:600">View</a>  
                           
                   
                    </div> 
                </div>
            </div>

            <div class="col-md-4">
                    <div class="card" style=";border-radius:20px;box-shadow: 0px 2px 8px 0px rgba(50, 50, 50, 0.09);">  
                       
                        <div class="card-body">
                           
                                
                                        <p class="card-title">Pending appointment</p>
                                        <h4>3000</h4>
                                            <p class="card-text">
                                            <a href="#" class=" " style="color:#F93822ff;font-weight:600">View</a>  
                               
                       
                        </div> 
                    </div>
                </div>

                <div class="col-md-4">
                        <div class="card" style=";border-radius:20px;box-shadow: 0px 2px 8px 0px rgba(50, 50, 50, 0.09);">  
                           
                            <div class="card-body">
                               
                                    
                                            <p class="card-title">Blood group</p>
                                            <h4>AA</h4>
                                                <p class="card-text">
                                                <a href="#" class=" " style="color:#F93822ff;font-weight:600">Profile</a>  
                                   
                           
                            </div> 
                        </div>
                    </div>  
            
               

                @else
               
                     

                        
                <div class="card">
                    <div class="card-header"> <h4 style="text-align:center;">Hello,    <b>{{Auth::guard('donor')->user()->name}}</b>  <br> <br>   Welcome to Bloodcare</h4> </div>
                   
                
                    <div class="card-body">
                
                       <b>Please go to the bloodcare center to finish your registration,Thanks.</b>
                
                       <br><br>
                            <div class="alert alert-success" role="alert">
                                <p><b> For more information, visit  <a href="{{route('donation-donation')}}" style="color:#245e71;text-decoration:underline;">Donation process</a></b></p>
                            </div>
                       
                
                  
                
                
                     
                    </div>
                </div>
                @endif


       
            </div>
        </div>
    </div>
</div>
@endsection



    
