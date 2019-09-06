@extends('layouts.app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading  text-center" style=" font-size:20px;">
            <b>Trashed donors</b>  
           </div>
           <br><br>
        <div class="panel-body">
                <table class="table table_hover">
                        <thead>
                           <th>
                              Name
                            </th>
                           
                            <th>
                              Email
                            </th>

                             <th>
                               Actions
                            </th>
                        </thead>
                
                        <tbody>
                           @if($donors->count()>0)
                                @foreach($donors as $donor)
                                    <tr>

                                            <td>
                                                {{$donor->name}} 
                                            </td>

                                            <td>
                                                {{$donor->email}} 
                                            </td>


                                           

                                            <td>
                                                

                                                <a href="{{route('donor.restore' , ['id'=>$donor->id])}}" class="btn btn-xs btn-success">
                                                        <span class="glypicon glyphicon-trash">Restore</span>
                                                </a> 

                                            
                                            </td>

                                            <td>
                                            
            
                                                    <a href="{{route('donor.kill' , ['id'=>$donor->id])}}" class="btn btn-xs btn-danger">
                                                            <span class="glypicon glyphicon-trash">Permanently Delete</span>
                                                    </a>
                                                </td>
                                    </tr>
                                
                                @endforeach

                            @else
                                    <tr>
                                        <th colspan="5" class="text-center">No trashed donors</th>
                                    </tr>

                            @endif
                        </tbody>
                    </table>
        </div>
    </div>

@stop