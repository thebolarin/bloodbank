@extends('layouts.donor-app')

@section('content')

    @include('admin.includes.error')

    <div class="panel panel-default">
        <div class="panel-heading  text-center">
          <h4 style="text-align:center;"> <b> My Appointments</b></h4>
        </div>
   
        <div class="panel-body ">
                <table class="table table_bordered">
                        <thead >
                            

                            <th>
                                Appointment date
                            </th>
                            <th>
                               Appointment time
                            </th>
                
                            <th>
                                Actions
                            </th>
                           
                           
                        </thead>
                
                        <tbody>
                            @if($appoint->count()> 0)
                                @foreach($appoint as $appoint)
                                <tr>
                                       
                                        

                                         <td>
                                                {{$appoint->date}}
                                        </td>

                                         <td>
                                                {{$appoint->time}}
                                        </td>


                                        <td>
                                           

                                       
                                            <a href="{{route('appoint.delete' , ['id'=>$appoint->id])}}" class="btn btn btn-danger">
                                                    <i class="flaticon-garbage"></i>
                                            </a>   

                                               
                                        </td>
                                </tr>
                                
                                @endforeach
                            @else
                                <tr>
                                    <th colspan="5" class="text-center">No appointment yet</th>
                                </tr>
                            @endif
                        </tbody>
                    </table>
        </div>
    </div>
@endsection