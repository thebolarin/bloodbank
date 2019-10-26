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
             <b>Edit post : {{$hospital->title}}</b>     
        </div>
   
        <div class="panel-body">
        <form action="{{route('hospital.update' , ['id'=>$hospital->id])}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Title </label>
                    <input type="text" name="title" class="form-control" value="{{ $hospital->title}}" >
                </div>

                <div class="form-group">
                    <label for="featured">Featured</label>
                    <input type="file" name="avatar" class="form-control" value="{{ $hospital->avatar}}" >
                </div>

               


                <div class="form-group">
                        <label for="content">Content</label>
                <textarea name="content" id="content" cols="5" rows="5" class="form-control">{{$hospital->content}}</textarea>
                </div>

                 <div class="form-group">
                     <div class="text-center">
                         <button class="btn btn-success" type="submit" onclick="return confirm('Are you sure you want to update this record?')" > Update  Post</button>
                     </div>
                 </div>
            </form>
        </div>
    </div>
@endsection