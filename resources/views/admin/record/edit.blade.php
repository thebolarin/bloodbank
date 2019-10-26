@extends('layouts.app')



@section('content')

       @include('admin.includes.error')

    <div class="panel panel-default">
        <div class="panel-heading text-center">
          <b> Update   {{ $record->name }} donation record</b> 
        </div>
   
        <div class="panel-body ">
            <form action="{{route('recordr.update' , ['id' => $record->id])}}" method="post" >
                {{ csrf_field() }}

              


                 <div class="form-group">
                    <label for="donor">Donor  name</label>
                    <input type="text" name="name" value="{{ $record->name }}" class="form-control">
                </div>

                

               
               <div class="form-group">
                        <label for="blood">Select blood type </label>
                        <select name="blood_id" id="blood" class="form-control">
                            @foreach($blood as $blood)
                                 <option value="{{$blood->group}}"
                                    
                                       

                                        @if($blood->group == $blood->group)
                                            selected
                                        @endif
                                        
                                        
                                    
                                    >{{$blood->blood_group}}</option>
                            @endforeach
                        </select>
                </div>

                 <div class="form-group">
                        <label for="blood">Select your status </label>
                        <select name="status_id" id="blood" class="form-control">
                            @foreach($status as $status)
                                 <option value="{{$status->status}}"
                                    
                                       

                                        @if($status->status == $status->status)
                                            selected
                                        @endif
                                        
                                        
                                    
                                    >{{$status->status }}</option>
                            @endforeach
                        </select>
                </div>

           

                

                 

                 <div class="form-group">
                    <label for="donor">Donation date</label>
                    <input type="date" name="date" value="{{ $record->date }}">
                </div>

                <div class="form-group">
                    <label for="group">Donation time</label>
                   <input type="time" name="time" value="{{ $record->time }}">

                

               

                 <div class="form-group">
                     <div class="text-center">
                         <button class="btn btn-success" type="submit"> Update</button>
                     </div>
                 </div>
            </form>
        </div>
    </div>

    
@endsection