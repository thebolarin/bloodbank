@extends('layouts.donor-app')

@section('content')

    

       
       
                <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
         <div class="card">
                                    <div class="card-header"> <h4 style="text-align:center;"><b>My donation records</b></h4> </div>
                                   

                                    <div class="card-body">
                            @if($fetch->count()>0)
                                @foreach($fetch as $fetch)

                                
                                       
                                            <div class="alert alert-success" role="alert">
                                               <b>  Your last donation was {{$fetch->date}} at about {{$fetch->time}}</b>
                                            </div>
                                       

                                  
                                
                                @endforeach
                                     
                                    </div>
                                </div>
                                    
                            @else
                             <div class="alert alert-info" role="alert">
                                                <p  class="text-center"><b>You are yet to make a blood donation.Please click the below link to make an appointment</b>
                                                        <br/>
                                                           
                                               </p>
                             </div>
                                   
                               <p class="text-center">
                               <a href="{{route('appointment.create')}}" class="btn btn btn-success " style="background:#007C89;">
                                        Make an appointment now
                                    </a> 
                               </p>   
                            @endif

                   </div>
    </div>
</div>         
        

@stop