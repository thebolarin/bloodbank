@extends('layouts.app')

@section('content')

       @include('admin.includes.error')

    <div class="panel panel-default">
        <div class="panel-heading text-center">
          <b> Update blood stock:      {{ $stock->id }}</b> 
        </div>
   
        <div class="panel-body ">
            <form action="{{route('stock.update' , ['id' => $stock->id])}}" method="post" >
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="price">Donor name</label>
                    <input type="text" name="donor_name" value="{{ $stock->donor_name }}" class="form-control">
                </div>

               <div class="form-group">
                        <label for="blood">Select blood type </label>
                        <select name="blood_id" id="blood" class="form-control">
                            @foreach($blood as $blood)
                                 <option value="{{$blood->id}}"
                                    
                                       

                                        @if($blood->id == $blood->id)
                                            selected
                                        @endif
                                        
                                        
                                    
                                    >{{$blood->blood_group }}</option>
                            @endforeach
                        </select>
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