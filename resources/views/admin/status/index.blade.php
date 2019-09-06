@extends('layouts.app')

@section('content')

    @include('admin.includes.error')

    <div class="panel panel-default">
            <div class="panel-heading  text-center" style=" font-size:20px;">
                    <b>Donor Status</b>  
                   </div>
                   <a href="{{route('status.create')}}" class="btn bt"> Add new donor status</a>
                   <br><br>
   
        <div class="panel-body ">
                <table class="table table_bordered">
                        <thead >
                            <th>
                                id
                            </th>
                            <th>
                              Status
                            </th>
                
                            <th>
                                Actions
                            </th>
                           
                           
                        </thead>
                
                        <tbody>
                            @if($status->count()> 0)
                                @foreach($status as $status)
                                <tr>
                                        <td>
                                                {{$loop->iteration}}
                                        </td>

                                         <td>
                                                {{$status->status}}
                                        </td>

                                        <td>
                                            <a href="{{route('status.edit' , ['id'=>$status->id])}}" class="btn btn btn-info">
                                                <i class="far fa-edit"></i>
                                            </a>   
                                       

                                       
                                            <a href="{{route('status.delete' , ['id'=>$status->id])}}" class="btn btn btn-danger">
                                                    <i class="far fa-trash-alt"></i>
                                            </a>   

                                               
                                        </td>
                                </tr>
                                
                                @endforeach
                            @else
                                <tr>
                                    <th colspan="5" class="text-center">No Donor status yet</th>
                                </tr>
                            @endif
                        </tbody>
                    </table>
        </div>
    </div>
@endsection