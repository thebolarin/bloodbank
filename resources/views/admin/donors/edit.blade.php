@extends('layouts.app')

@section('content')


            @if(count($errors) > 0)
            <ul class="list-group">
                @foreach($errors->all() as $error)
                    <li class="list-group-item text-danger">
                        {{$error}}
                    </li>
                @endforeach
            </ul>

            @endif


   <div class="panel panel-default">
       <div class="panel-heading">
       <h2 class="text-center">  Edit donor:{{$donors->name}}</h2>
       </div>

       <div class="panel-body">

            <form action="{{route('donor.update' , ['id'=>$donors->id])}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}


                
                            
                        <div class="form-group">
                            <label for="title">Full name</label>
                            <input type="text" name="name" class="form-control" value="{{$donors->name}}">
                        </div>

                        <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" value="{{$donors->email}}">
                        </div>

                        
                       
                  


                       

                      

                       

                

                  

                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">Update Donor</button>
                        </div>
                    </div>          

                
                       
            </form>
   </div>
    
@endsection