@extends('layouts.app')

@section('content')

       @include('admin.includes.error')

    <div class="panel panel-default">
        <div class="panel-heading">
            Update appointment:      {{ $appointment->name }}
        </div>
   
        <div class="panel-body ">
            <form action="{{route('appointment.update' , ['id' => $appointment->id])}}" method="post" >
                {{ csrf_field() }}

              


              

                 

                 <div class="form-group">
                    <label for="donor">Appointment date</label>
                    <input type="date" name="date" value="{{ $appointment->date }}">
                </div>

                <div class="form-group">
                    <label for="group">Appointment time</label>
                   <input type="time" name="time" value="{{ $appointment->time }}">

                

               

                 <div class="form-group">
                     <div class="text-center">
                         <button class="btn btn-success" type="submit"> Update Blood group</button>
                     </div>
                 </div>
            </form>
        </div>
    </div>
@endsection