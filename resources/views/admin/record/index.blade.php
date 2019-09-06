@extends('layouts.app')


@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection


@section('content')

    @include('admin.includes.error')

    <div class="panel panel-default">
            <div class="panel-heading  text-center" style=" font-size:20px;">
                    <b>Donation Records</b>  
                   </div>
                   <a href="{{route('record.create')}}" class="btn bt"> Add new record</a>
                   <br><br>
   
        <div class="panel-body ">
                <table class="table table_bordered" id="datatable">
                        <thead >
                            <th>
                                Donor name
                            </th>
                            <th>
                               Blood group
                            </th>

                             <th>
                              Donation Date
                            </th>
                            <th>
                              Donation time
                            </th>

                           
                
                            <th>
                                Actions
                            </th>
                           
                           
                        </thead>
                
                        <tbody>
                            @if($record->count()> 0)
                                @foreach($record as $record)
                                <tr>
                                       
                                         <td>
                                                {{$record->name}}
                                        </td>

                                        

                                         <td>
                                                  {{$record->blood_id}}
                                        </td>

                                         <td>
                                                  {{$record->status_id}}
                                        </td>

                                        

                                         <td>
                                                {{$record->date}}
                                        </td>

                                         <td>
                                                {{$record->time}}
                                        </td>


                                        <td>
                                            <a href="{{route('record.edit' , ['id'=>$record->id])}}" class="btn btn btn-info">
                                                <i class="far fa-edit"></i>
                                            </a>   
                                       

                                       
                                            <a href="{{route('record.delete' , ['id'=>$record->id])}}" class="btn btn btn-danger">
                                                    <i class="far fa-trash-alt"></i>
                                            </a>   

                                               
                                        </td>
                                </tr>
                                
                                @endforeach
                            @else
                                <tr>
                                    <th colspan="5" class="text-center">No Donation record yet</th>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <br>
                    <br>
                    <br>
                    <a href="{{route('record.download')}}" class="btn btn-s btn-success text-center" style="margin-left:40%; margin-top:5%;">Download as excel</a>
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