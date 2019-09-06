@extends('layouts.app')


@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection


@section('content')

    @include('admin.includes.error')

    <div class="panel panel-default">
        <div class="panel-heading text-center"  style=" font-size:20px;">
            <b> Donors Appointment</b> 
      </div>
      <br><br>
   
        <div class="panel-body ">
                <table class="table table_bordered" id="datatable">
                        <thead >
                            <th>
                                Donor name
                            </th>
                            <th>
                               Donor email
                            </th>

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
                            @if($appointment->count()> 0)
                                @foreach($appointment as $appointment)
                                <tr>
                                       
                                         <td>
                                                {{$appointment->name}}
                                        </td>

                                         <td>
                                                {{$appointment->email}}
                                        </td>

                                         <td>
                                                {{$appointment->date}}
                                        </td>

                                         <td>
                                                {{$appointment->time}}
                                        </td>


                                        <td>
                                            <a href="{{route('appointment.edit' , ['id'=>$appointment->id])}}" class="btn btn btn-info">
                                                <i class="far fa-edit"></i>
                                            </a>   
                                       

                                       
                                            <a href="{{route('appointment.delete' , ['id'=>$appointment->id])}}" class="btn btn btn-danger">
                                                    <i class="far fa-trash-alt"></i>
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

@section('scripts')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
    $('#datatable').DataTable();
} );
</script>
@endsection