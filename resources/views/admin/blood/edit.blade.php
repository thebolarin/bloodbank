@extends('layouts.app')

@section('content')

       @include('admin.includes.error')

    <div class="panel panel-default">
        <div class="panel-heading">
            Update blood group:      {{ $blood->blood_group }}
        </div>
   
        <div class="panel-body ">
            <form action="{{route('blood.update' , ['id' => $blood->id])}}" method="post" >
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="blood_group">Blood group</label>
                    <input type="text" name="blood_group" value="{{ $blood->blood_group }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" value="{{ $blood->price }}" class="form-control">
                </div>

               

                 <div class="form-group">
                     <div class="text-center">
                         <button class="btn btn-success" type="submit"> Update Blood group</button>
                     </div>
                 </div>
            </form>
        </div>
    </div>
@endsection