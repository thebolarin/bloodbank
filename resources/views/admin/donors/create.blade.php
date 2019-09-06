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
            <h2 class="text-center"> Admin Donor Registration</h2>
       </div>

       <div class="panel-body">

            <form action="{{route('donors.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Full name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
    
                        <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control">
                        </div>
    
                           

                

                  

                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit"> Register Donor</button>
                        </div>
                    </div>          

                </div>
                       
            </form>
   </div>
    
@endsection

@section('styles')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
@endsection


@section('scripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
<script>
        $(document).ready(function(){
          $('#summernote').summernote();
        });
</script>

@endsection