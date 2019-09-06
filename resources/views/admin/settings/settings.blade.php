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
       <h2 class="text-center">  Edit  settings</h2>
       </div>

       <div class="panel-body">

            <form action="{{route('settings.update')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}


               
                   
                            
                        <div class="form-group">
                            <label for="site_name">Site name</label>
                            <input type="text" name="site_name" class="form-control" value="{{$settings->site_name}}">
                        </div>

                        <div class="form-group">
                                <label for="contact_email">Email</label>
                                <input type="text" name="contact_email" class="form-control" value="{{$settings->contact_email}}">
                        </div>

                        <div class="form-group">
                                <label for="contact_number">Contact</label>
                                <input type="text" name="contact_number" class="form-control" value="{{$settings->contact_number}}">        
                        </div>
                   

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control" value="{{$settings->address}}">
                        </div>

                       
                   
               


                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">Update settings</button>
                        </div>
                    </div>          

                </div>
                       
            </form>
   </div>
    
@endsection