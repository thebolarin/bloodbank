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
        <div class="panel-heading text-center">
            <h3> Create a new post</h3>
            <a href="{{route('eligible')}}" class="btn xs btn-success">
                Goto all Eligible post  records
         </a>
        </div>
   
        <div class="panel-body">
        <form action="{{route('eligible.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Title </label>
                    <input type="text" name="title" class="form-control" required>
                </div>

               
               
              

                

                <div class="form-group">
                        <label for="content">Content</label>
                       <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
                </div>

                 <div class="form-group">
                     <div class="text-center">
                         <button class="btn btn-success" type="submit" id="submit"> Store Post</button>
                     </div>
                 </div>
            </form>
        </div>
    </div>
@endsection

@section('styles')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
@endsection


@section('scripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
<script>
        $(document).ready(function(){
          $('#content').summernote();
        });
</script>



@endsection