@extends('layouts.donor-app')

@section('content')

    @include('admin.includes.error')

    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                        <div class="card">
                                <div class="card-header">
                                  <h4 style="text-align:center;"><b> Create a new appointment</b></h4> 
                                </div>
                           
                                <div class="card-body ">
                                    <form action="{{route('appointment.store')}}" method="post" >
                                        {{ csrf_field() }}
                        
                        
                                         <div class="form-group">
                                            <label for="donor"><b> Appointment date</b></label>
                                            <input type="date" name="date">
                                        </div>
                        
                                        <div class="form-group">
                                            <label for="group"> <b> Appointment time</b></label>
                                           <input type="time" name="time">
                                        </div>
                        
                        
                                         <div class="form-group">
                                             <div class="text-center">
                                                 <button class="btn btn-success" type="submit" style="border-radius:0;background:#007C89;">Submit</button>
                                             </div>
                                         </div>
                        
                                    </form>
                                </div>
                            </div>
                </div>
            </div>
    </div>

  
@endsection