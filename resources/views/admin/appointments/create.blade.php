@extends('layouts.app')

@section('content')

    @include('admin.includes.error')

    <div class="panel panel-default">
        <div class="panel-heading">
            Create a new appointment
        </div>
   
        <div class="panel-body ">
            <form action="{{route('appointment.store')}}" method="post" >
                {{ csrf_field() }}

              

                 

                 <div class="form-group">
                    <label for="donor">Appointment date</label>
                    <input type="date" name="date">
                </div>

                <div class="form-group">
                    <label for="group">Appointment time</label>
                   <input type="time" name="time">
             


                 <div class="form-group">
                     <div class="text-center">
                         <button class="btn btn-success" type="submit"> Store </button>
                     </div>
                 </div>
            </form>
        </div>
    </div>
@endsection