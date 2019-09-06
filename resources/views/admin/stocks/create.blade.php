@extends('layouts.app')

@section('content')

    @include('admin.includes.error')

    <div class="panel panel-default">
        <div class="panel-heading">
            Create a new blood stock
        </div>
   
        <div class="panel-body ">
            <form action="{{route('stock.store')}}" method="post" >
                {{ csrf_field() }}

                 <div class="form-group">
                    <label for="donor">Donor name</label>
                    <input type="text" name="donor_name" class="form-control">
                </div>

                   <div class="form-group">
                        <label for="blood">Select Blood type </label>
                        <select name="blood_id" id="blood" class="form-control">
                           
                            @foreach($blood as $blood)
                                <option value="{{$blood->id}}">{{$blood->blood_group}}</option>
                            @endforeach
                       
                        </select>
                </div>

                 

               

                 <div class="form-group">
                     <div class="text-center">
                         <button class="btn btn-success" type="submit"> Store </button>
                     </div>
                 </div>
            </form>
        </div>
    </div>
@endsection