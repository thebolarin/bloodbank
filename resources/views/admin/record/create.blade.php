@extends('layouts.app')

@section('content')

    @include('admin.includes.error')

    <div class="panel panel-default">
        <div class="panel-heading">
            Add a donation record
        </div>
   
        <div class="panel-body ">
            <form action="{{route('record.store')}}" method="post" >
                {{ csrf_field() }}

                 <div class="form-group">
                    <label for="donor">Donor name</label>
                    <input type="text" name="name" class="form-control">
                </div>

               

                      

                   <div class="form-group">
                        <label for="blood">Select Blood type </label>
                        <select name="blood_id" id="blood" class="form-control">
                           
                            @foreach($blood as $blood)
                                <option value="{{$blood->blood_group}}">{{$blood->blood_group}}</option>
                            @endforeach
                       
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="blood">Select donors status </label>
                        <select name="status_id" id="blood" class="form-control">
                           
                            @foreach($status as $status)
                                <option value="{{$status->status}}">{{$status->status}}</option>
                            @endforeach
                       
                        </select>
                    </div>
             

         

                 

                 <div class="form-group">
                    <label for="donor">Donation date</label>
                    <input type="date" name="date">
                </div>

                <div class="form-group">
                    <label for="group">Donation time</label>
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