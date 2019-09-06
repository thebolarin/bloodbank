@extends('layouts.app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading  text-center" style=" font-size:20px;">
            <b>Hospital posts</b>  
           </div>
           <a href="{{route('hospital.create')}}" class="btn bt"> Add new post</a>
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
                            @if($hospital->count()>0)
                                @foreach($hospital as $hospital)
                                    <tr>
                                        <td>
                                            <img src="{{ $hospital->avatar}}" alt="{{ $hospital->title}}"  width="100px"   height="80px">
                                        </td>

                                            <td>
                                            {{$hospital->title}} 
                                            </td>

                                            <td>
                                             {!!$hospital->content!!} 
                                            </td>



                                            <td>
                                                    <a href="{{route('hospital.edit' , ['id'=>$hospital->id])}}" class="btn xs btn-info"  data-toggle="popover" title="Edit">
                                                            <span class="flaticon-pencil"></span>
                                                    </a> 
                                                
                                            </td>

                                            <td>
                                                

                                                <a href="{{route('hospital.delete' , ['id'=>$hospital->id])}}" class="btn xs btn-danger" onclick="return confirm('Are you sure you want to delete this record?')"  data-toggle="popover" title="Delete">
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