@extends('layouts.app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading  text-center" style=" font-size:20px;">
            <b>About Us Posts</b>  
           </div>
           <a href="{{route('about.create')}}" class="btn bt"> Add new post</a>
           <br><br>
        
        <div class="panel-body">
                <table class="table table_hover">
                        <thead>
                            
                            <th>
                                Featured
                             </th>

                            <th>
                               Title
                            </th>

                            <th>
                                content
                             </th>
                           
                            <th>
                               Edit
                            </th>

                            <th>
                               Trash
                            </th>
                        </thead>
                
                        <tbody>
                            @if($about->count()>0)
                                @foreach($about as $about)
                                    <tr>
                                        <td>
                                            <img src="{{ $about->avatar}}" alt="{{ $about->title}}"  width="100px"   height="80px">
                                        </td>

                                            <td>
                                            {{$about->title}} 
                                            </td>

                                            <td>
                                             {!!$about->content!!} 
                                            </td>



                                            <td>
                                                    <a href="{{route('about.edit' , ['id'=>$about->id])}}" class="btn xs btn-info"  data-toggle="popover" title="Edit">
                                                            <span class="flaticon-pencil"></span>
                                                    </a> 
                                                
                                            </td>

                                            <td>
                                                

                                                <a href="{{route('about.delete' , ['id'=>$about->id])}}" class="btn xs btn-danger" onclick="return confirm('Are you sure you want to delete this record?')"  data-toggle="popover" title="Delete">
                                                        <span class="flaticon-rubbish-bin"></span>
                                                </a> 
                                            </td>

                                          
                                    </tr>
                                
                                @endforeach
                            @else
                                <tr>
                                    <th colspan="5" class="text-center">No published posts</th>
                                </tr>
                            @endif
                        </tbody>
                    </table>
        </div>
    </div>

@stop