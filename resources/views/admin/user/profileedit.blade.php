@extends('layouts.app')

@section('content')

    @include('admin.includes.error')

    <div class="panel panel-default">
            <div class="panel-heading">
                    <h4 style="text-align:center;"><b> My profile</b></h4> 
            </div>
   <br>
        <div class="panel-body ">
            <form action="{{route('user.profile.update')}}" method="post"  enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Username</label>
                <input type="text" name="name"  value= "{{$user->name}}"  class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name="email" value= "{{$user->email}}"  class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">New password</label>
                    <input type="text" name="password"  class="form-control">
                </div>

              

                <div class="form-group">
                    <label for="name"> New Avatar</label>
                    <div class="alert alert-danger" role="alert">
                            <p  class="text-center"><b>Please make sure your avatar is not more than 2MB</b>
                                   
                           </p>
                     </div>
                    <input type="file" id="upload" name="avatar" class="form-control">
                </div>

              
               


               

                 <div class="form-group">
                     <div class="text-center">
                         <button class="btn btn-success" id="sub-btn" type="submit">Update profile</button>
                     </div>
                 </div>
            </form>
        </div>
    </div>
@endsection