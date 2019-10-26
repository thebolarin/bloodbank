@extends('layouts.donor-app')

@section('content')

    @include('admin.includes.error')

    <div class="panel panel-default">
        <div class="panel-heading">
                <h4 style="text-align:center;"><b> My profile</b></h4> 
        </div>
   <br>
        <div class="panel-body ">
            <form action="{{route('donor.profile.update')}}" method="post"  enctype="multipart/form-data">
                {{ csrf_field() }}

<div class="row">
    <div class="col-md-6">
              <div class="form-group">

                   
                    <label for="name"><b> New Avatar</b></label>
                    <div class="alert alert-danger" role="alert">
                            <p  class="text-center"><b>Please make sure your avatar is not more than 2MB</b>
                                   
                           </p>
                     </div>
                    <input type="file" name="avatar" id="upload" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name"> <b> Username</b></label>
                <input type="text" name="name"  value= "{{$donor->name}}"  class="form-control">
                </div>

                <div class="form-group">
                    <label for="name"><b>Email</b></label>
                      <input type="email" name="email" value= "{{$donor->email}}"  class="form-control">
                </div>

                 <div class="form-group">
                    <label for="name"><b>Gender</b> </label>
                <input type="text" name="gender"  value= "{{$donor->profile->gender}}"  class="form-control">
                </div>

    </div>

    <div class="col-md-6">
            <div class="form-group">
                    <label for="name"><b>Phone number</b></label>
                    <input type="text" name="contact_number" value= "{{$donor->profile->contact_number}}"  class="form-control">
                </div>

                 <div class="form-group">
                    <label for="name"> <b>House address</b></label>
                <input type="text" name="address"  value= "{{$donor->profile->address}}"  class="form-control">
                </div>

                 <div class="form-group">
                        <label for="blood">  <b>Select blood type</b> </label>
                        <select name="blood_id" id="blood" class="form-control">
                            @foreach($blood as $blood)
                                 <option value="{{$blood->blood_group}}"
                                    
                                       

                                        @if($blood->group == $blood->group)
                                            selected
                                        @endif
                                        
                                        
                                    
                                    >{{$blood->blood_group }}</option>
                            @endforeach
                        </select>
                </div>

                 <div class="form-group">
                        <label for="blood"> <b>Select your status</b> </label>
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
                    <label for="name"> <b>New password</b></label>
                    <input type="text" name="password"  class="form-control">
                </div>
    </div>
</div>
               
              

               

              

               


               

                 <div class="form-group">
                     <div class="text-center">
                         <button class="btn btn-success" type="submit" id="sub-btn" style="border-radius:0;background:#007C89;">Update profile</button>
                     </div>
                 </div>
            </form>
        </div>
    </div>
@endsection

