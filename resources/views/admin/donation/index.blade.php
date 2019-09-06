@extends('layouts.app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading  text-center" style=" font-size:20px;">
            <b>Donation Overview posts</b>  
           </div>
           <a href="{{route('donation.create')}}" class="btn bt"> Add new post</a>
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
                            @if($donation->count()>0)
                                @foreach($donation as $donation)
                                    <tr>
                                        <td>
                                            <img src="{{ $donation->avatar}}" alt="{{ $donation->title}}"  width="100px"   height="80px">
                                        </td>

                                            <td>
                                            {{$donation->title}} 
                                            </td>

                                            <td>
                                             {!!$donation->content!!} 
                                            </td>



                                            <td>
                                                    <a href="{{route('donation.edit' , ['id'=>$donation->id])}}" class="btn xs btn-info"  data-toggle="popover" title="Edit">
                                                            <span class="flaticon-pencil"></span>
                                                    </a> 
                                                
                                            </td>

                                            <td>
                                                

                                                <a href="{{route('donation.delete' , ['id'=>$donation->id])}}" class="btn xs btn-danger" onclick="return confirm('Are you sure you want to delete this record?')"  data-toggle="popover" title="Delete">
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