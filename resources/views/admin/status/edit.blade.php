@extends('layouts.app')

@section('content')

       @include('admin.includes.error')

    <div class="panel panel-default">
        <div class="panel-heading text-center">
        <b> Update blood group:      {{ $status->status }}</b>   
        </div>
   
        <div class="panel-body ">
            <form action="{{route('status.update' , ['id' => $status->id])}}" method="post" >
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" name="status" value="{{ $status->blood_group }}" class="form-control">
                </div>

               

               

                 <div class="form-group">
                     <div class="text-center">
                         <button class="btn btn-success" type="submit"> Update </button>
                     </div>
                 </div>
            </form>
        </div>
    </div>
@endsection